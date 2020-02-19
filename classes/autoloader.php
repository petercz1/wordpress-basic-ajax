<?php
namespace chipbug\basic\ajax;

/**
 * simple recursive spl_autoloader
 */
 class Autoloader
 {
     // modify as needed
     private $classesFolder = 'classes';

     /**
      * recursively scan files and autoload as necessary
      * WARNING: doesn't work with duplicate file names, eg folder1/index.php and folder2/index.php
      *
      * @return void
      */
     public function init()
     {
         error_log('loading autoloader...');
         spl_autoload_register(array($this,'recursivelyFindClasses'));
     }
     
     /**
      * finds all classes and checks if this class is listed
      * if so, it requires it.

      * @param [type] $class
      * @return void
      */
     private function recursivelyFindClasses(string $class): void
     {
         try {
             error_log('trying to find files...');
             // explode namespace and classname into array
             $class = explode("\\", $class);
             // get last item (ie classname) and convert to lowercase
             $class = strtolower(end($class)) . '.php';
             
             // does the recursion for us. Nice.
             // note it assumes all your classes/folders are in 'classes' unless you changed it in line 10
             $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->classesFolder, \RecursiveDirectoryIterator::SKIP_DOTS));
             
             //  // iterate through dirs and files
             foreach ($files as $file) {
                 if (strtolower($file->getFilename())  == $class && $file->isReadable()) {
                     // include the class
                     echo $file->getPathname() . PHP_EOL;
                     require_once $file->getPathname();
                 }
             }
         } catch (\Throwable $th) {
             // note: using php 7 Throwable
             error_log($th->getFile() . ': line ' . $th->getLine() . ', ' . $th->getMessage());
         }
     }
 }
