<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class contributorsController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        

			$this->filter = \DataFilter::source(new \App\Contributor);
			$this->filter->add('name', 'Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('name', 'Name');
			$this->grid->add('id', 'id');
			$this->grid->add('fb_id', 'fb_id');
			$this->addStylesToGrid();

       
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

			$this->edit = \DataEdit::source(new \App\Contributor());

			$this->edit->label('Edit Category');

			$this->edit->add('name', 'Name', 'text');
		
			$this->edit->add('id', 'id', 'text');
			$this->edit->add('fb_id', 'fb_id', 'text');
			$this->edit->add('name', 'name', 'text');
			$this->edit->add('email', 'email', 'text');
			$this->edit->add('birthbay', 'birthbay', 'text');
			$this->edit->add('education', 'education', 'text');
			$this->edit->add('gender', 'gender', 'text');
	        
       
        return $this->returnEditView();
    }    
}
