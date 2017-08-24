<div class="col-md-12">
                 <div class="right-panel">
                  <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 main-hd">
                     <h4 class="text-left title">My Dashboard</h4>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
                     <ul class="right-mid-nav pull-right">
                      <li><a href="#">Design Proficient  </a></li>
                      <li class="active"><a href="{{ route('user.profile') }}">Dashboard</a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                      <div id="columnChart"></div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                      <div id="pieChart"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="tab-box-2" onclick="window.location.href='{{ route('dash.orders') }}'">
                      <div class="dash-con"><i class="fa fa-building" aria-hidden="true"></i></div>
                        <h2>Orders</h2>
                        <p>Have a look at all of your orders and their current project position.</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="tab-box-2" onclick="window.location.href='{{ route('dash.reviews') }}'">
                      <div class="dash-con"><i class="fa fa-thumbs-up" aria-hidden="true"></i></div>
                        <h2>Reviews</h2>
                        <p>Record a feedback of your experience with us.</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="tab-box-2 margin-0" onclick="window.location.href='{{ route('dash.packages') }}'"> <!-- arrow_box-active -->
                      <div class="dash-con"><i class="fa fa-line-chart" aria-hidden="true"></i></div>
                        <h2>Packages</h2>
                        <p>Browse through some of our bestselling packages.</p>
                      </div> 
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-md-12 listing-rd">
      <h4 class="text-left title">Recent Quotes</h4>               
    <table id="listing" class="mdl-data-table display dash-data-table"  cellspacing="0" width="100%">

        <thead>
            <tr>
                  <th><i class="fa fa-building" aria-hidden="true"></i> Interest</th>
                  <th><i class="fa fa-list" aria-hidden="true"></i> Budget</th>
                  <th><i class="fa fa-phone-square" aria-hidden="true"></i> Description</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th><i class="fa fa-building" aria-hidden="true"></i> Interest</th>
                <th><i class="fa fa-list" aria-hidden="true"></i> Budget</th>
                <th><i class="fa fa-phone-square" aria-hidden="true"></i> Description</th>
            </tr>
        </tfoot>
        <tbody>
          
          @if( $quotes!=null )
            @foreach( $quotes as $quote )
              <tr>
                  <td>{{ $quote->interest }}</td>
                  <td>{{ $quote->budget }}</td>
                  <td>{{ $quote->description }}</td>
              </tr>
            @endforeach
          @else
            <tr>
                <td colspan="3" style="text-align: left;"> You have not send us any yet. </td>
            </tr>
          @endif  
        </tbody>
    </table>
                  </div>
                </div>
            </div>
                </div>