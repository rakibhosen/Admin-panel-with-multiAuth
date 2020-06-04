<div class="footer ">
    <div class="container ">
        <div class="row ">
            <div class="col-md-6 ">
                <div class="footer-icon ">
               <ul>
              
                   <li><a href="#"></a><i class="fa fa-facebook "></i></li>
                    <li><i class="fa fa-twitter "></i></li>
                    <li><i class="fa fa-google "></i></li>
                    <li><i class="fa fa-linkedin "></i></li>
                </ul>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="copy-right-text ">
                    <p>&copy copyright all right reserved Jahir Group <span class="developed_by"><a href="https://sigmasoftbd.com/" target="_blank">Developed by Sigmasoft</a>  </span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer-notice">
	<div class="row">
		<div class="col-sm-12">
			<div class="employee-title-block">
                <span class="employee-title-block-text">Today's Sale:</span>
                
                
			</div>
			<div class="footer-notice-text">
            
				<marquee>
                    @foreach (DB::table('employee_sells')->get() as $employee)
                    <a href="#" class="employee-title"><i class="fa fa-user"></i>
                        <span class="employee_name">{{ $employee->name }}</span>
                         - <span class="badge badge-info">{{ $employee->sell }}</span> </a>
                    @endforeach
					
				
				</marquee>
			</div>
		</div>
	</div>
	
</div>