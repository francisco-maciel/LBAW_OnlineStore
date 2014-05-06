{include file='common/header.tpl'}

<link rel="stylesheet" href="{$BASE_URL}css/manageOrders.css">


<div class="container">
    <h3>Manage Orders</h3>
    <hr>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Users</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Order ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="State" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Date Placed" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Subtotal" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>

</div>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="{$BASE_URL}javascript/manageOrders.js"></script>


{include file='common/footer.tpl'}