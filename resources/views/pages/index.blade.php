@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <div class="container" id="jumbo">
            <h2>DSCE Calci</h2>
            <p>This WebApp allows you to evaluate CO, PO, PSO. Follow the below links to the features or navigate to them through the navigation bar.</p>
        <hr id="jumbohr">
        </div>
    </div>
    <div class="container">
        <div class="row" >
            <div class="col-xs-12 col-sm-6 col-md-4" style="text-align:center;">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Course Outcomes - Program Outcomes
                    </div>
                    <div class="panel-body">
                        <p><a href="viewco">View Course Outcomes</a></p>
                        <p><a href="addco">Edit Course Outcomes</a></p>
                        <p><a href="addco">Add Course Outcomes</a></p>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>


            <div class="col-xs-12 col-sm-6 col-md-4 " style="text-align:center;">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Course Outcomes - Program Specific Outcomes
                            </div>
                            <div class="panel-body">
                                <p><a href="viewpso">View Program Specific Outcomes</a></p>
                                <p><a href="addpso">Edit Program Specific Outcomes</a></p>
                                <p><a href="addpso">Add Program Specific Outcomes</a></p>
                            </div>
                            <div class="panel-footer"></div>
                        </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-0 " style="text-align:center;">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Add Student Details
                            </div>
                            <div class="panel-body">
                                <p><a href="#">View Student Details</a></p>
                                <p><a href="#">Edit Student Details</a></p>
                                <p><a href="#">Add Student Details</a></p>
                            </div>
                            <div class="panel-footer"></div>
                        </div>
            </div>
        </div>


        <!--<footer>
            <p>Website created and designed by <em>Tharun K</em></p>
        </footer> -->
    </div>

@endsection
