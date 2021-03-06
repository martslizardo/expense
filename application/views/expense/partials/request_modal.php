<div id="request-modal" data-backdrop="static" data-keyboard="false" class="modal fade" role="dialog">
  	<div class="modal-dialog">

    <!-- Modal content-->
    	<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Filing of Reimbursement</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<h5 class="text-danger" id="error-message"></h5>
				<form id="request-form" method="post">
					<div class="form-group">
						<div class="form-group">
							<label>Classification</label>
							<select name="classification" class="form-control">
								<?php foreach($this->classification as $row): ?>
									<option value="<?= $row->id ?>"><?= $row->classification ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<label>Amount</label>
							<input class="form-control" id="amount" type="text" name="amount">
						</div>
						<div class="form-group">
							<label>Receipt</label>
							<select name="receipt" id="with_receipt" class="form-control">
								<option value="" disabled selected>-- With Receipt / Without Receipt -- </option>
								<option value="1">Yes</option>
								<option value="0">No</option>
							</select>
						</div>
						
					</div>
					<div class="form-group" id="receipt-image">
						<label for="">Receipt Image</label>
						<input class="form-control" type="file" name="receipt_image" />
					</div>
			</div>
			<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary custom-button float-right">Save</button>
				</form>
			</div>
		</div>
  </div>
</div>