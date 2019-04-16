
<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-25-36">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
                <div class="row content5">
                    <div class="col-md-6">

                    </div> 
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel5">
                            <div class="x_title">
                                <h2><i class="fa fa-align-left "></i> <a href="#"><span onclick="fun()"> Collapsible / Accordion </span></a><small>Sessions</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a id="hello" data-toggle="collapse" href="#element5"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a id="close-link5"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div id="element5">
                                <div class="accordion">
                                    <div class="panel panel-text">
                                        <a class="panel-heading" data-toggle="collapse" href="#collapseOne">
                                            <h4>Collapsible Group Items #1</h4>
                                        </a>
                                        <div id="collapseOne" class="collapseContent collapse">
                                            <div class="body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>User Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        <tr>
                                                            <th >2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr>
                                                            <th>3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-text">
                                        <a class="panel-heading" data-toggle="collapse" href="#collapseTwo">
                                            <h4>Collapsible Group Items #2</h4>
                                        </a>
                                        <div id="collapseTwo" class="collapseContent collapse">
                                            <div class="body">
                                                <p><strong>Collapsible Item 2 data</strong>
                                                </p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-text">
                                        <a class="panel-heading "  data-toggle="collapse" href="#collapseThree" >
                                            <h4>Collapsible Group Items #3</h4>
                                        </a>
                                        <div id="collapseThree" class="collapseContent collapse">
                                            <div class="body">
                                                <p><strong>Collapsible Item 3 data</strong>
                                                </p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>