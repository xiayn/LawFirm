<?php
include('../LawFirm/application/views/header.php'); ?>
<div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-list-alt"></i>Documents</h2>

            </div>
            <div class="box-content">

                <!-- the search code -->
                <div class="row-fluid">
                    <div class="span6">
                        <div id="DataTables_Table_0_length" class="dataTables_length">
                            <label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                    <option value="10" selected="selected">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> records per page
                            </label>
                        </div>
                    </div>

                    <div class="span6">
                        <div class="dataTables_filter, dataTables_length2 " id="DataTables_Table_0_filter">
                            <label>Filter By: &nbsp;
                                <select id="selectError3" size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                    <option value="client name" >Employee Name</option>
                                    <option value="template name" >Status</option>
                                    <option value="date and time created" >Date/Time Created</option>
                                </select> 
                                &nbsp; Search: &nbsp; <input type="text" aria-controls="DataTables_Table_0">
                            </label>
                        </div>
                    </div>
                    
                    <div class ="span6">
                        <div id="DataTables_Table_0_length" class="dataTables_length">
                                <a class="btn btn-info"><i class="icon-file icon-white"></i> <!-- New --> </a> 
                                <a class="btn btn-danger"><i class="icon-trash icon-white"></i> <!-- Delete --></a>
                                <a class="btn btn-group"><i class ="icon-download-alt icon-info"></i><!--Download --></a>
                                <a class="btn btn-group"><i class ="icon-refresh icon-info"></i><!--Download --></a>
                        </div>
                       <br>
                    </div>

                </div>
                <!-- the search code end -->
               


                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                        <tr>
                            <th><form id="form1" name="form1" method="post" action="">
                        <input type="checkbox" name="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                    </form>
                    </th>
                    <th>Employee ID number</th>
                    <th>Employee Name</th>
                    <th>Date Created</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                    </thead>   

                    <tbody>
                        <!--first information-->
                        <tr>
                            <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                            <td class="center">20100103</td>
                            <td class="center">Buela, Christian</td>
                            <td class="center">07/16/2013</td>							
                            <td class="center">active</td>


                            <td class="center">
                                <a class="btn btn-info" href="pdf/1.  CM-010 (Civil Case Cover Sheet).pdf"> <i class="icon-eye-open icon-white"></i> <!-- View --> </a> 
                                <a class="btn btn-warning" href=#"> <i class="icon-edit icon-white"></i> <!-- Edit --></a>
                                <a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
                                <a href ="#" class="btn btn-group btn-setting"> <i class="icon icon-clock"></i> <!-- Browse --></a>
                            </td>
                        </tr>

                        <!-- second information -->
                        <tr>
                            <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                            <td class="center">20100102</td>
                            <td class="center">Fernandez, Tyrone</td>
                            <td class="center">07/15/2013</td>
                            <td class="center">active</td>

                            <td class="center">
                                <a class="btn btn-info" href="pdf/2.  SUM-100 (Summons).pdf"> <i class="icon-eye-open icon-white"></i> <!-- View --> </a> 
                                <a class="btn btn-warning" href="#"> <i class="icon-edit icon-white"></i> <!-- Edit --></a>
                                <a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
                                <a href="#" class="btn btn-group btn-setting"> <i class="icon icon-clock"></i> <!-- Browse --></a>
                            </td>
                        </tr>

                        <!-- third information -->
                        <tr>
                            <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                            <td class="center">20100101</td>
                            <td class="center">Dagdag,Vladimer</td>
                            <td class="center">07/14/2013</td>
                            <td class="center">active</td>


                            <td class="center">
                                <a class="btn btn-info" href="pdf/3.  SUM-200(A) (Summons Additional Parties).pdf"> <i class="icon-eye-open icon-white"></i> <!-- View --> </a> 
                                <a class="btn btn-warning" href="#"> <i class="icon-edit icon-white"></i> <!-- Edit --></a>
                                <a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
                                <a href="#" class="btn btn-group btn-setting"> <i class="icon icon-clock"></i> <!-- Browse --></a>
                            </td>
                        </tr>

                    </tbody>
                </table>

                <!-- paging part -->
                <div class="row-fluid"><div class="span12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div></div><div class="span12 center"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div>



            </div>
        </div><!--/span-->
    </div><!--/row-->

    <!-- content ends -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->

</div>
</div><!--/span-->

</div><!--/row-->


<!-- content ends -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->

<hr>

<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Document history</h3>
    </div>
    <div class="modal-body">
        <table border="0">
            <tr>
                <td>Last accessed by:</td>
                <td>Juan Dela Cruz</td>
            </tr>
            <tr>
                <td>Date of last accessed:</td>
                <td>December 12, 2013</td>
            </tr>
            <tr>
                <td>Modified by:</td>
                <td>Pedro Santos</td>
            </tr>
        </table>
    </div>
    <div class="modal-footer">
        <a href="index.html" class="btn" data-dismiss="modal">Restore</a>
        <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
    </div>
</div>	
<?php include('../LawFirm/application/views/footer.php'); ?>

