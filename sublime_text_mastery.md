# laracasts sublime text mastery (Memo)     
https://laracasts.com/series/sublime-text-mastery   
[给sublime text添加文件icon](https://github.com/ihodev/a-file-icon)     
—— 
### Section 02 Shortcuts    
	1. Command + p  快速打开最近打开的文件   
	2. Command + R /  Shift + Command + R 快速查找方法名 (可配合 Command + p)  

### Section 03 - Super-Fast File Creation    
	安装 AdvancedNewFile 插件  
	1. 创建文件快捷键： Command + alt + N   
	如果在路径前加 : , 就是在当前文件夹下建立新文件，不用指定路径  
	2. 快速修改文件名： shift + command + p -> anf:rename file  
  

### Section 04 - Do The Splits With Origami   
	安装 Origami 插件  
	- 打开窗口  
	command + k ,command + ->, 右边新窗口  
	command + k ,command + down, 下边新窗口  
  
	- 关闭窗口  
	command + k ,command + shift + ->, 关闭右边窗口  
	command + k ,command + shift + down, 关闭下边窗口  
  
### Section 05 - Vintage Mode （VIM）  

### Section06 - Multiple Cursors  
	快捷键：   
	command + d 选择下一个，多选  
	command + g 选择下一个，单选  
	command + ctl + g 选择本文件中所有相同内容的单词  
  
### **  Section 07 - Better PHP Workflow    
	1. 配置snippets    
		met,   创建public method    
		pmet 创建 protected method    
		class 创建新class    

	2. 安装 PHP GETTERS AND SETTERS 插件，为PHP class自动生成getter, setter      
	3. 安装 php companion 插件，https://github.com/erichard/SublimePHPCompanion    
		expand_fqcn ->  f9, 自动填充 class 完整路径  
		find_use -> f10 php文件自动顶部填充 class use路径  
		insert_php_constructor_property -> f7 自动设置 __construct 方法   
````  
[
	{ "keys": ["f9"], "command": "expand_fqcn" },
	{ "keys": ["f10"], "command": "find_use" },
	{ "keys": ["f7"], "command": "insert_php_constructor_property" },
]
````  
  
### Section 08 - Better PHPUnit Workflow  
[安装phpunit](https://phpunit.de/getting-started.html)    
[sublime text 安装 SimplePHPUnit 插件](https://github.com/pr0ggy/SimplePHPUnit-for-Sublime-Text)  
[添加terminal快捷键,解决ST找不到phpunit的问题](http://www.sublimetext.com/docs/3/osx_command_line.html)    
  
````    
ln -s "/Applications/Sublime Text.app/Contents/SharedSupport/bin/subl" /usr/local/bin/subl  
````    
   
### Section 09 - Trigger Artisan From Sublime  
	安装 laravel  5 artisan 插件  

### Section 10 - Automatic PSR-2 Formatting  
[安装php-cs-fixer组件](http://packagist.org/packages/fabpot/php-cs-fixer)  
composer global require fabpot/php-cs-fixer  

  
### Section 11 - Lint Your PHP 报错提示  
	安装 SublimeLinter , SublimeLinter-php 插件   

----    

2017.5.3 学习笔记      