<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class postController extends CrudController{

    public function all($entity){
        parent::all($entity); 

       
			$this->filter = \DataFilter::source(new \App\Posts);
			$this->filter->add('name', 'Nome', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('id', 'id');
			$this->grid->add('name', 'Nome');
			$this->addStylesToGrid();

      
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

       
			$this->edit = \DataEdit::source(new \App\Posts());

			$this->edit->label('Edit Category');
			/*$this->edit->add('category_id','category_id','text');*/
			$this->edit->add('name','Nome','text');
			$this->edit->add('title','title','text');
			$this->edit->add('description','description','redactor');
			$this->edit->add('image','image','image')->move('uploads/images/')->preview(80,80);
 
        return $this->returnEditView();
    }    
}
