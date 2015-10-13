<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class postsController extends CrudController{

    public function all($entity){
        parent::all($entity); 

       
			$this->filter = \DataFilter::source(new \App\Post);
			$this->filter->add('name', 'Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('name', 'Name');
			$this->grid->add('code', 'Code');
			$this->addStylesToGrid();

                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

			$this->edit = \DataEdit::source(new \App\Post());

			$this->edit->label('Edit Category');
			$this->edit->add('name', 'Name', 'text');
			$this->edit->add('title', 'title', 'text');
			$this->edit->add('description', 'description', 'text');
		
			


       
        return $this->returnEditView();
    }    
}
