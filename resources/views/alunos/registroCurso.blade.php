@extends("layout.layout")

@section("conteudo")
    
    <div class="col-xs-12 col-sm-8 col-md-12 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title" style="text-align:center">Cadastro de AACC <small></small></h3>
						@if (Session::has('success'))
							Protocolo de cadastramento: {{ Session::get('success') }}
						@endif
			 			</div>
			 			<div class="panel-body">
			    		<form action="cadastroAACC" method="post" role="form">
							@csrf
			    			<div class="row" action>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                			<input type="text" name="ra" id="ra" class="form-control input-sm floatlabel" placeholder="RA">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="nomealuno" id="nomealuno" class="form-control input-sm" placeholder="Nome Aluno">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="text" name="curso" id="curso" class="form-control input-sm" placeholder="Curso">
			    			</div>
			    			
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>

@stop