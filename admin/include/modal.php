<!-- Button trigger modal -->
<?php include("./function/connection.php");
$result = $connect->query("SELECT * FROM report_bugs"); ?>

<div id="exampleModalPopovers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header danger-color white-text">
        <h5 class="modal-title" id="exampleModalPopoversLabel">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">

        <p>
          <?php while($row = $result->fetch_assoc()){
            echo $row['messages'];
          } ?>
          </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>