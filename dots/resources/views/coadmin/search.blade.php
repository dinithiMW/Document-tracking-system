@extends('layouts.coadmin')

@section('title')
   Admin Dashboard 
@endsection




@section('content')


<div class="row">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" > SEARCH DOCUMENT</h4>
    </div>
    <div class="col-md-4">
          <form action="/search" method="get">
          <div class="form-group">
            <input type="text" name="search" id="search" class="form-control" >
            <span class="form-group-btn">
              <!--<button type="submit" class="btn btn-primary" >search</button>-->
            
                    <!-- Button to Open the Modal -->
<button type="submit" id="search" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">
  Search
</button>
<!--<button type="submit" id="location" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">
  location
</button>-->
</span>

          </div>
          </form>

          


       </div>
<div class="col-md-12">
            
              <div class="card-header">
                <h4 class="card-title"> </h4>
              </div>

              <div class="card-body">
                <div id="datatable" class="table-responsive">
                <table class="table">
                <caption>List of Documents</caption>
                    <thead class=" text-primary">
                    
                      <th style="color:rgb(19, 4, 48)">
                        Barcode
                      </th >
                      <th style="color:rgb(19, 4, 48)">
                        Branch Name
                      </th>
                      <th style="color:rgb(19, 4, 48)">
                        Scan Time
                      </th>
                      <th>
                        
                      </th>
                      
                      
                      
                    </thead>


                    <tbody>
                        @foreach ($scands as $row)
                        @if($row->branch_name  =='applied')
                       <svg height="50" width="750" style="background-color:gray; border-color: black;" >
	<path id="lineAB" d="M 100 350  L 200 130" stroke="red" stroke-width="3" fill="none" />

  <g id="point" stroke="black" stroke-width="3" fill="black">
    <circle id="pointA" cx="100" cy="25" r="3" />
    <circle id="pointB" cx="200" cy="25" r="3" />
    <circle id="pointC" cx="300" cy="25" r="3" />
    <circle id="pointD" cx="400" cy="25" r="3" />
    <circle id="pointE" cx="500" cy="25" r="3" />
    <circle id="pointF" cx="600" cy="25" r="3" />
    <circle id="pointG" cx="700" cy="25" r="3" />
  </g>
  <g id="point2" stroke="blue" stroke-width="10" fill="blue" >
    <circle id="pointA" cx="200" cy="25" r="3" />
    
  </g>
  <!-- Label the points -->
  <g font-size="15" font-family="sans-serif" fill="black" stroke="none" text-anchor="middle">
    <text x="100" y="25" dx="-10">VC</text>
    <text x="200" y="25" dy="-10">FAS</text>
    <text x="300" y="25" dx="-10">FG</text>
    <text x="400" y="25" dy="-10">FMS</text>
    <text x="500" y="25" dx="-10">FSS</text>
    <text x="600" y="25" dx="-10">FAGS</text>
    <text x="700" y="25" dx="-10">FT</text>
  </g>
  Sorry, your browser does not support inline SVG.
</svg>
@elseif($row->branch_name  =='agriculture')
                       <svg height="50" width="750" style="background-color:gray; border-color: black;" >
	<path id="lineAB" d="M 100 350  L 200 130" stroke="red" stroke-width="3" fill="none" />

  <g id="point" stroke="black" stroke-width="3" fill="black">
    <circle id="pointA" cx="100" cy="25" r="3" />
    <circle id="pointB" cx="200" cy="25" r="3" />
    <circle id="pointC" cx="300" cy="25" r="3" />
    <circle id="pointD" cx="400" cy="25" r="3" />
    <circle id="pointE" cx="500" cy="25" r="3" />
    <circle id="pointF" cx="600" cy="25" r="3" />
    <circle id="pointG" cx="700" cy="25" r="3" />
  </g>
  <g id="point2" stroke="blue" stroke-width="10" fill="blue" >
    <circle id="pointA" cx="600" cy="25" r="3" />
    
  </g>
  <!-- Label the points -->
  <g font-size="15" font-family="sans-serif" fill="black" stroke="none" text-anchor="middle">
    <text x="100" y="25" dx="-10">VC</text>
    <text x="200" y="25" dy="-10">FAS</text>
    <text x="300" y="25" dx="-10">FG</text>
    <text x="400" y="25" dy="-10">FMS</text>
    <text x="500" y="25" dx="-10">FSS</text>
    <text x="600" y="25" dx="-10">FAGS</text>
    <text x="700" y="25" dx="-10">FT</text>
  </g>
  Sorry, your browser does not support inline SVG.
</svg>

                       @else
                       <p></p>
                       @endif
                      
                       
                      <tr>
                      
                        <td><a href="/chart"> {{ $row->barcode }}</a>
                         
                        </td>
                        <td>
                       {{ $row->branch_name }}
                       
                        </td>
                        <td>
                        {{ $row->created_at }}
                        </td>
                        <td>
                        <i1 class="arrow up"></i1>
                        <div class="vl"></div>
                        
                        
                        
                        </td>
                        
                      </tr>
                      @endforeach
                      
                        
                      
                    </tbody>
                  </table>
                
                  <a href="/chart" class="btn btn-info btn-sm">Chart</a>
                  <a href="/search" class="btn btn-primary btn-sm">Back</a>
                  
                   
                </div>
              </div>
            </div> &nbsp 

            @endsection





@section('scripts')
<script>
  
</script>
@endsection