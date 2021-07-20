
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tools Usuarios</h2>
            </div>
         
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->username }}</td>
            <td>{{ $value->password  }} -- </td>  
            <td>
                {{ Hash::make("4880568");  }}
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
