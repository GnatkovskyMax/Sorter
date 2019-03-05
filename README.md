  <h1>PHPLibrary </h1>

This is a PHP lybrary that should use in order to sorting array. With this library you can to sort array by increas or decreas.

Installation

For creating new project based on this template just execute the following command

$ composer require maxstepit/sorter project-name

    

Usage

    e.g.  You have Array $data:
              $data=['1','4','7','2','5','3','6'];
       If you want to sort array.
       
       Firstly, you may to choose logic of sorting, 
       there are 3 logics that return you array in needed order:
       
           $logic=new Gnatkovsky\Sorting();
           $logic=new Gnatkovsky\SortingRevers();
           $logic=new Gnatkovsky\SortingNull();
       
       Secondly, you sould to create new class Gnatkovsky\Sorter().
       
           $sorter=new Gnatkovsky\Sorter($logic);
       
       Thirdly, you should call method doSorting($data).
       
           $sorting->doSorting($data);
       If you want to replace logic of sorting you may create new logic,
       then call method setLogic($newLogic).
       
           $newLogic=new Gnatkovsky\SortingRevers();  
           $sorting->setLogic($newLogic);
           
    This project is released under the terms of the proprearity license.

    Maxim Gnatkovsky