@extends('content')
@section('option')
    <link rel="stylesheet" type="text/css" href="{{asset('css/AMessagerie.css')}}">
	<div class="container-fluid service-content">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
				<h1 class="text-center font-weight-bold">Messagerie</h1>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 tableFixHead">
						<table class="table">
							<thead>
								<tr>
									<th >id</th>
									<th >Contenu</th>
									<th >email</th>
									<th >Tel</th>
									<th >Date</th>
									<th >Heure</th>
									<th ></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>01</td>
									<td class="Grand">fqfqf dhkmqsfqsjfqsdlsqkdsqmdlsq,dmlqsd;,qsmdqslmd,qsdùl,sssssssssssssssssssssqdd ddzdsqdq dsqdqdq        dqdqdqd dqdqd  dqdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</td>
									<td>soheib@sfmq</td>
									<td>0153655235</td>
									<td>15/454/232</td>
									<td>18:23</td>
									<td class="Petit" data-toggle="modal" data-target="#ModalDelete"><img data-toggle="tooltip" data-placement="top" title="Delete" src="{{asset('images/admin/delete.svg')}}"></td>
								</tr>
							</tbody>
						</table>
					</div>			
				</div>
			</div>
		</div>
		<div class="modal fade" id="ModalDelete" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-center" >Etes vous sure?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST">
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-danger pull-left "  data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary ">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@stop