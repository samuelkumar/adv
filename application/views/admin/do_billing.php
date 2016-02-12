<!-- Page Content Start -->
<!-- ================== -->

<div class="wraper container-fluid">

    <div class="row">
        
		
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Billing </h3></div>
                <div class="panel-body">
				
				<div class="row">

                                <fieldset class="col-md-4" >
                                    <label class="control-label">
                                        Invoice Number
                                    </label>
                                    <div class="controls">
                                        <input id="invoice_number" name="invoice_number" value="BIV-4" class="form-control" type="text" required autocomplete="off">


                                    </div>
                                </fieldset>

                               <fieldset class="col-md-4">
                                    <label class="control-label">
                                         Date
                                    </label>
                                    <div class="form-grou">
                                        <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="date" data-link-format="yyyy-mm-dd">
                                            <input class="form-control" size="16" type="text" value="" required="" >
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="hidden" id="date" name="date" ><br>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4">
                                    <label id="fuel_type_label" class="control-label" for="fuel_type" required="">
                                        Customer Name
                                    </label>
                                    <div class="controls">
                                        <input class="form-control cu_name" type="text" name="cu_name">


                                    </div>
                                </fieldset>

                            </div>
				
				

<div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <table  class="table  billing-table">
                        <thead>
                            <tr>
                                <th><button  style="visibility:hidden">
                                                <i class="fa fa-trash-o">
                                                </i>
                                            </button></th>
                                <th>Product</th>
                                <th>Description</th>
                                <th>Unit Price</th>
                                <th>Qty</th>
                                <th>Tax</th>
                                <th>Line Total</th>
                                
                          </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>
                                    <button   style="visibility:hidden">
                                                <i class="fa fa-trash-o">
                                                </i>
                                            </button>
                                    
                                </td>
                                <td>
                                    <input class="form-control productid" type="hidden"  name="productid[]">
                                    <input class="form-control product product-suggest" type="text"  name="product[]">
                                </td>
                                
                                <td>
                                    
                                    <input class="form-control" type="text"  name="description[]">
                                </td>
                                
                                 <td>
                                    
                                    <input class="form-control" type="text"  name="price[]">
                                </td>
                                
                                 <td>
                                    
                                    <input class="form-control " type="text"  name="qty[]">
                                </td>
                                
                                
                                 <td>
                                    
                                    <input class="form-control" type="text"  name="tax[]">
                                </td>
                                
                                 <td>
                                    
                                    <input class="form-control" type="text"  name="line_total[]">
                                </td>
                            </tr>

                        </tbody>
                    </table>
					<button id="addrow" style=" background: #0A0B0E; border: none; color: white; " >
                                    <i class="fa fa-plus">
                                    </i>
                                </button>
</div>
</div>


                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->

    </div> <!-- End row -->

	

</div>
<!-- Page Content Ends -->



