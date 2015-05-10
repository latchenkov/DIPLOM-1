<?php

class InstallController extends CController
{
    private $db_user;
    private $db_password = '';
    private $db_host;
    private $db_name;
    
        /**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->render('index', array('baseUrl'=>Yii::app()->request->baseUrl));
	}
    
        
    public function actionInstall(){
        $path = dirname(__FILE__).DIRECTORY_SEPARATOR;
    // Расположение файла дампа test.sql
        $dump_file=$path.'../data/test.sql';
    // Расположение файла для записи параметров подключения
        $file_setting=$path."../config/setting.php";
        
        if (isset($_POST['submit'])) { // если была нажата кнопка
            $this->db_user = trim($_POST['db_user']);
            $this->db_password=trim($_POST['db_password']);
            $this->db_host=trim($_POST['db_host']);
            $this->db_name=trim($_POST['db_name']);
    
        // Подключаемся к базе данных
            $connection = $this->connectDB();
        // Удаление всех таблиц из БД
            $this->dropTable($connection);
        // Парсим файл дампа и удаляем комментарии и пустые строки
            $query = $this->parsingDumpFile($dump_file);
        // Помещаем данные из дампа в БД
            $this->putDumpDB($connection, $query);
        // Записываем параметры подключения в установочный файл
            $this->putSettingFile($file_setting);
        // Формируем страницу отображения
            $this->render('index', array('success'=>true, 'baseUrl'=>Yii::app()->request->baseUrl));
        }
    }    
        
// Функция подключения к базе данных        
    public function connectDB() {    
        $dsn = 'mysql:host='.$this->db_host.';dbname='.$this->db_name;
        $username = $this->db_user;
        $password = $this->db_password;
            $connection = new CDbConnection($dsn,$username,$password); 
            $connection->active=true;
        return $connection;
    }
// Функция очистки базы данных
    public function dropTable(CDbConnection $connection) {    
        $res = array();
        $res = $connection->schema->getTableNames();
        if (!empty($res)){
            $command=$connection->createCommand("SET foreign_key_checks = 0");
                $command->execute();
            $command=$connection->createCommand("DROP TABLE " . implode(",", $res));
                $command->execute();
        }
    }
// Функция парсинга файла дампа данных БД
    public function parsingDumpFile($dump_file) {
        if (file_exists($dump_file)){
            $file=file($dump_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                $c = count($file);
                for( $i = 0; $i < $c; $i++){
                    if(substr(trim($file[$i]),0,2) == '--'){
                        unset($file[$i]);
                    }
                }
        $query = explode(';', implode ($file));
        return $query; 
        }
        else {
            exit ('Дампа БД не существует. Проверьте наличие файла test.sql в директории protected/data<br>'
                    . '<a href="'. Yii::app()->request->baseUrl .'/install.php">Вернуться назад.</a>');
        }
    }
// Функция записи дампа в БД
    public function putDumpDB(CDbConnection $connection, array $query) {
        foreach ($query as $v){
            if (!empty($v)){
                $command=$connection->createCommand($v);
                    $command->execute();
            }
        }
    }
// Функция записи данных подключения в файл
    public function putSettingFile($file_setting) {
        $string =
            "<?php \r\n"
                . "define('DB_USER','" .  $this->db_user . "'); \r\n"
                . "define('DB_PASS','" .  $this->db_password . "'); \r\n"
                . "define('DB_HOST','" .  $this->db_host . "'); \r\n"
                . "define('DB_NAME','" .  $this->db_name . "'); \r\n";
        if(!file_put_contents($file_setting, $string)) { 
            exit ('Возникла ошибка при записи файла данных подключения к БД.<br>'
                    . '<a href="'. Yii::app()->request->baseUrl .'/install.php">Вернуться назад.</a>');
        } 
    }
}