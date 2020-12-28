		<div class="col-lg-3 col-md-3">
			<div class="card card-body shadow">
				<form method="get" action="/search">
					 <div class="input-group input-group-sm col-md-12">
                        <input type="text" class="form-control"  name="q" placeholder="Search..."   aria-describedby="button-addon1"/>
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="submit" id="button-addon1" >
                                    Go
                                </button>
                            </div>  
                    </div>
					
				</form>
			</div>
		
			<div class="card card-body mt-3">
				<ul class='list-group'>
					<li class="list-group-item"><a href="/addProduct" style="text-decoration: none;"> Add product</a></li>
					<li class="list-group-item"><a href="/moderate"> Moderate prices</a></li>
					<li class="list-group-item"><a href="/credit"> Book credit</a></li>
					<li class="list-group-item"><a href="#">Check credit</a></li>
					<!-- <li class="list-group-item"><a href="#"> Moderate prices</a></li> -->
				</ul>
			</div>
		</div>
	