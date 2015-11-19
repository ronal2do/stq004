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
			$this->filter->submit('buscar');
			$this->filter->reset('limpar');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('id', 'id');
			$this->grid->add('name', 'Nome');
			$this->grid->add('description', 'Descrição');
			$this->grid->add('date_old', 'Data');
			$this->addStylesToGrid();

      
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

       
			$this->edit = \DataEdit::source(new \App\Posts());

			$this->edit->label('Postagem');
			
			$this->edit->add('name','Nome','text');
			$this->edit->add('category_id','Categoria','select')->options(\App\Category::lists("name", "id")->all());
			$this->edit->add('description','description','redactor');
			$this->edit->add('date_old','Data fake','text');
			$this->edit->add('image','image','image')->move('uploads/images/')->preview(80,80);
 
        return $this->returnEditView();
    }    
}
