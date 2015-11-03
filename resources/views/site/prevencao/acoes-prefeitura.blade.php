@extends('site.index')
@section('title')
  Ações Individuais
@stop
@section('content')
   
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Ações Prefeitura</h2>

      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  
 
  <!-- /.dark-wrapper -->
  
  <div class="light-wrapper">
    <div class="container inner">
      
        <div class="col-sm-5">
            <img src="{{ asset('images/acoes/prefeitura1.png') }}" alt=""/>
        </div>
        <!--/column -->
        <div class="col-sm-7">
           <h1 style="color: #6F4996;">Unidade especial de Saúde</h1>
          <p>
          As unidades especiais de saúde têm o objetivo de desafogar as demais UBSs e hospitais em 

época de grande procura por atendimento médico em decorrência da dengue. Este local foi 

pensado para combater a alta da doença na cidade e atende exclusivamente aos seus casos ou 

sintomas. Todas as unidades especiais têm equipes treinadas e estão devidamente 

estruturadas para receber a população.
          </p>
          </div>
        <!--/column -->
      </div> 
    <!--/.container --> 
  </div>
  <!-- /.light-wrapper -->
  
<div class="yellow-wrapper">
    
 <div class="container inner">
      
       
        <!--/column -->
        <div class="col-sm-7">
           <h1 >Mutirão de Visitas</h1>
          <p>
            Uma grande equipe de agentes técnicos tem a missão de visitar cada casa e estabelecimento 

em Marília. Eles procuram minuciosamente por possíveis focos da doença e orientam os 

moradores sobre como proceder para evitar a proliferação do mosquito da dengue.
          </p>
          </div>
           <div class="col-sm-5">
            <img src="{{ asset('images/acoes/prefeitura2.png') }}" alt=""/>
        </div>
        <!--/column -->
  </div>  

</div>
<div class="dark-wrapper">
    <div class="container inner">
      
        <div class="col-sm-5">
            <img src="{{ asset('images/acoes/prefeitura3.png') }}" alt=""/>
        </div>
        <!--/column -->
        <div class="col-sm-7">
           <h1 style="color: #6F4996;">Mutirão de nebulização</h1>
          <p>
          Em uma ação conjunta com a sociedade, a Prefeitura de Marília realiza periodicamente as 

nebulizações mesmo fora da alta temporada no verão. As aplicações do inseticida são 

realizadas em cada imóvel individualmente, garantindo a eficácia do trabalho. Escolas, 

unidades de saúde e outros grandes prédios também recebem o cuidado.
          </p>
          </div>
        <!--/column -->
      </div> 
    <!--/.container --> 
  </div>
  <!-- /.light-wrapper -->
 <div class="purple-wrapper">
    <div class="container inner">
      <div class="row">
       <div class="col-sm-2 col-md-2">
          
            <img src="{{ asset('images/acoes/multa1.png') }}" alt="" style="width:89px; height:111px;"/>
        </div>
         <div class="col-sm-3 col-md-3">
          <h2>Multas<br> domésticas</h2>
        </div>
        <!--/column -->
        <div class="col-sm-7 col-md-7">
           <p>
             Moradores que não colaborarem com as medidas de prevenção orientadas pelos agentes

poderão receber multa. Ela será aplicada em casos de recusa para acabar com criadouros do 

mosquito da dengue e as penalidades variam entre R$ 180,00 e R$ 720,00. No caso de imóveis 

fechados, os valores podem chegar a R$ 5.000,00.
          </p>

        </div>
        <!--/column --> 
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
    
  </div>



  <div class="yellow-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-6 col-md-6">
          <p>
         A Prefeitura de Marília está apertando o cerco nos imóveis abandonados na nossa cidade, pois 

se estima que 90% dos locais negligenciados tenham focos do mosquito da dengue. Com 

respaldo legal, a prefeitura é autorizada a entrar nos locais com seus agentes, acompanhados 

da Polícia Militar. Se localizados criadouros da dengue, os proprietários são notificados para 

limpeza imediata e, caso ela não seja realizada, recebem penalidades de acordo com as 

reincidências.
          </p> 
        </div>
        <!--/column -->
        <div class="col-sm-4 col-md-4">
          
           <h2>Multas imóveis<br> abandonados</h2>
        </div>
        <div class="col-sm-2 col-md-2">
             <img src="{{ asset('images/acoes/multa2.png') }}" alt="" style="width:89px; height:111px;"/>
        </div>
        <!--/column --> 
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
    
  </div>

  

  
  

@stop

