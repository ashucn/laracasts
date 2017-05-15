# Note for PHP Tutorial    
  

## [The PHP Practitioner](https://laracasts.com/series/php-for-beginners/episodes/1)  
PUBLISHED ON JUN. 30TH 2016   

### 01 Step 1: Get PHP Installed  3:51  
````  
brew search php
brew install homebrew/php/php71
php -v
````  

### 02 Step 2: Install a Proper Code Editor  9:21
首要推荐的编辑器为： sublime text 3    
ST插件：  
````  
- SimplePHPUnit  // 系统要先安装PHPUnit (composer globe require PHPunit)  
- PHP GETTERS AND SETTERS    
- SublimeLinter  
- SublimeLinter-php   
- AdvancedNewFile   
- Origami   
- php companion
	(以下快捷键需要安装插件后在ST Key Binding中设置)  
  	-- expand_fqcn ->  f9, 自动填充 class 完整路径  
	-- find_use -> f10 php文件自动顶部填充 class use路径  
	-- insert_php_constructor_property -> f7 自动设置 __construct 方法   
````  
  
### 03 Step 3: Variables  7:37

php -h // 显示php帮助信息  
php -S localhost:8887 // run with php build in web server  
  
### 04 Step 4: PHP and HTML  12:38
1. 关于php闭合代码  
如果文件全部是php代码，不用php闭合代码 " ?> ",    
如果有html+php代码，则使用php闭合代码。  

2. 注意用户输入的安全   
使用输入过滤，例如 htmlspecialchars() (相反的，转回字符用 htmlspecialchars_decode() )   
````  
<?= "Hello, " . htmlspecialchars($_GET['name']); ?>
````  
" <?php echo " 等同于 " <?= "    

### 05 Step 5: Separate PHP Logic From Presentation  3:46
/
  
### 06 Step 6: Understanding Arrays  7:44

````
$names = [
  'ashu',
  'kadi',
  'may',
];
// index.view.php 
<ul>
    <?php foreach ($names as $name) :?>
    <li><?= $name; ?></li>
    <?php endforeach;?>
</ul>
````  

### 07 Step 7: Associative Arrays  12:04
````  
$person = [
    'name' => 'ashu',
    'age' => 20,
];
$person['career'] = 'web developer';

$animals = ['dog', 'cat'];
$animals[] = 'elephant'; // ['dog', 'cat', 'elephant']

var_dump($person); // 打印array需要用var_dump, echo只打印字符串
unset($person['age']); // 删掉array的一个item

// index.view.php 
<ul>
    <?php foreach ($person as $key => $value) :?>
    <li><?= $key; ?> : <?= $value; ?></li>
    <?php endforeach;?>
</ul>
````  


### 08 Step 8: Booleans  10:44
````  
$task = [
    'title' => 'ashu',
    'due' => 'today',
    'assigned_to' => 'may',
    'done' => false,
];

// index.view.php 
<ul>
    <li>Name: <?= $task['title'] ?></li>
    <li>Due Date: <?= $task['due'] ?></li>
    <li>Person Responsible: <?= $task['assigned_to'] ?></li>
    <li>Done: <?= $task['done'] ?'done':'incomplete' ?></li>
</ul>
````  
 
### 09 Step 9: Conditionals  6:58
/

### 10 Step 10: Functions  7:49
/

### 11 MySQL 101  16:18
安装mysql  
````  
brew search mysql
brew install mysql
````  

创建db和tables  
````  
create database test;
create table todos ();
````  
db client softwart 推荐：  
navicat, sequelpro, datagrip    
  
### 12 Classes 101  16:10

创建class, properties, __construct, methods...  
创建 objects（自动执行 __construct ）  
````
index.php
  class Task {
  
      public $des;
      public $completed = false; // protected: class生成的对象不能直接访问，只内部class内部访问
  
      public function __construct($des)
      {
          $this->des = $des;
  
      }
  
      /**
       * @return mixed
       */
      public function complete()
      {
          return $this->completed = true;
      }
  
      public function isComplete()
      {
          return $this->completed;
      }
  }
  
  $tasks = [
      new Task('lib'),
      new Task('store'),
  ];
  
  $tasks[1]->complete();
  
  ----------
  // index.view.php
  
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->des ?></strike>
            <?php else: ?>

                <?= $task->des ?>
            <?php endif; ?>

        </li>

    <?php endforeach; ?>
</ul>

````  

### 13 Intro to PDO  15:16  


### 14 PDO Refactoring and Collaborators  17:39

### 15 Hide Your Secret Passwords  6:27
将敏感信息单独提出  
```` 
// config.php 

return [
  'database' => [
    'dbname' => 'tasks',
    'username' => 'homestead',
    'password' => '',
    'connection' => 'mysql:host=127.0.0.1:33060',
    'options' => [
      // http://php.net/manual/en/pdo.setattribute.php
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ],
];

// Connetcion.php 
class Connection {
  // static方法可以不用创建类的对象直接使用的方法Connection::make();
  public static function make ($config){
    try {
        // return new PDO('mysql:host=127.0.0.1:33060;dbname=tasks', 'homestead', 'secret');

        return new PDO(
            $config['connection'].';dbname='.$config['dbname'], 
            $config['username'], 
            $config['password'],
            $config['options']
          );
    } catch (PDOException $e) {
        die($e->getMessage());
    }
  }
}

````    

### 16 Make a Router  24:19

首先，整理文件夹结构  

### 17 Dry Up Your Views  7:02

### 18 Array Filtering  13:31

### 19 Forms, Request Types, and Routing  13:17 

### 20 Dynamic Inserts With PDO  12:24 

### 21 Composer Autoloading  4:38 

### 22 Your First DI Container  7:04 

### 23 Refactoring to Controller Classes  17:34 

### 24 Switch to Namespaces  14:52 

### 25 Meet Your Batteries Included Framework: Laravel  17:26