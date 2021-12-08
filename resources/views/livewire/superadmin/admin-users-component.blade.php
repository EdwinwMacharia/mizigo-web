<div>
    <style>
        nav svg{
            height:20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
       <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                   <div class="row">
                       <div class="col-md-6"> All users</div>
                       <div class="col-md-6">
                           <a href="{{route('superadmin.adduser')}}" class="btn btn-success pull-right">Add New</a>
                       </div>
                   </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th> FULL NAME</th>
                                <th>SLUG</th>
                                <th>EMAIL</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                               <td>1</td>
                                <td>John </td>
                                <td>johh-jamwa</td>
                                <th>testing@gmail.com</th>
                                <td>
                                    <a href="" ><i class="fa fa-edit fa-2x"></i></a>
                                    <a href="#"  onclick="confirm('Are you sure, You want to delete Category?') || event.stopImediatePropagation()" style="margin-left:10x;"><i class="fa fa-trash fa-2x text-danger"></i></a>
                                </td>
                                
                            </tr>
                           
                        </tbody>

                    </table>
                        
                </div>
            </div>
        </div>
       </div>

    </div>
</div>
