<?php
   require ('vendor/autoload.php');

   use PhpParser\Error;
   use PhpParser\ParserFactory;

   $parser = (new ParserFactory)->create(ParserFactory::ONLY_PHP5);
   $code   = file_get_contents('input.php');

   try {
      $stmts = $parser->parse($code);
      foreach ($stmts as $stmt) {
         $classType = get_class($stmt);
         $startLine = $stmt->getAttribute('startLine');
         $endLine   = $stmt->getAttribute('endLine');

         if ($classType == 'PhpParser\Node\Stmt\Function_') {
            print_r ($stmt);
         }

         if ($classType == 'PhpParser\Node\Stmt\Class_') {

         }

         if ($classType == 'PhpParser\Node\Expr\FuncCall') {

         }

         if ($classType == 'PhpParser\Node\Expr\MethodCall') {

         }
      }
   } catch (Error $e) {
      echo 'Parse Error: ', $e->getMessage();
   }

?>

