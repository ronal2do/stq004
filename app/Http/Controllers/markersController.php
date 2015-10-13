<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class markersController extends CrudController{

    public function all($entity){
        parent::all($entity); 

      
			$this->filter = \DataFilter::source(new \App\Mark);
			$this->filter->add('name', 'Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('description', 'description');
			$this->grid->add('status', 'status');
			$this->addStylesToGrid();

                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

			$this->edit = \DataEdit::source(new \App\Mark());

			$this->edit->label('Edit Category');

			$this->edit->add('description', 'description', 'text');
			$this->edit->add('photo', 'photo', 'text');
			$this->edit->add('status', 'status', 'text');
			$this->edit->add('address', 'address', 'text');
			$this->edit->add('lat', 'lat', 'text');
			$this->edit->add('lng', 'lng', 'text');		
			$this->edit->add('user_id', 'user_id', 'text');

       
        return $this->returnEditView();
    }    
}
