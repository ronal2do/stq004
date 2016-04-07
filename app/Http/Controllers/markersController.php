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
			$this->filter->add('name', 'Nome', 'text');
			$this->filter->submit('buscar');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('address', 'Endereço');
			$this->grid->add('description', 'Descrição');
			$this->grid->add('name', 'Nome');
			$this->grid->add('email', 'E-mail');
			$this->addStylesToGrid();

                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

			$this->edit = \DataEdit::source(new \App\Mark());

			$this->edit->label('Edit Category');

			$this->edit->add('address', 'Endereço', 'text');
			$this->edit->add('description', 'Descrição', 'text');
			$this->edit->add('name', 'Nome', 'text');
			$this->edit->add('email', 'E-mail', 'text');
			$this->edit->add('status', 'Status', 'text');
      
        return $this->returnEditView();
    }    
}
