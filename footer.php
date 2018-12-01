        <div class="container-fluid">
            <div id="footer" class="row">
                <div class="left-part">
                    Copyright @ 2018. CWLT Trucking Services. All Rights Reserved
                    <br>
                    Powered by Ready Blokes Development Team
                </div>
                <div class="right-part">
                    <i class="fab fa-facebook fa-2x" onClick="window.open('https://www.facebook.com/cwlttruckingservices')"></i>
                    <i class="fab fa-instagram fa-2x" onClick="window.open('https://www.instagram.com/cwlttruckingservices/')"></i>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="scripts/index.js"></script>
        <script src="scripts/request_quote.js"></script>
    </body>
</html>
<!-- Request a Quote -->
<div class="modal fade" id="request-quote" tabindex="-1" role="dialog" aria-labelledby="request-quote-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="request-quoteLabel">Request a Quote</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="alert alert-success cwlt-alert" id="alert-quote-sent">
                        Quote Sent!
                    </div>
                    <div class="alert alert-danger cwlt-alert" id="alert-quote-failed">
                        Please Complete all required fields
                    </div>
                    <div class="alert alert-info cwlt-alert" id="alert-quote-sending">
                        Sending Quote
                        <img src="assets/loading_small.gif">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Name"
                                    id="input-name"
                                    maxlength="200"
                                >
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Company"
                                    id="input-company"
                                    maxlength="200"
                                >
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Pickup Date"
                                    id="input-pickup-date"
                                    maxlength="50"
                                >
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Pickup Location"
                                    id="input-pickup-location"
                                    maxlength="200"
                                >
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="input-truck-type">
                                    <option value="0">Truck Type / Model</option>
                                    <option value="1">12 Wheeler Wing Van Trucks</option>
                                    <option value="2">10 Wheeler Wing Van Truck</option>
                                    <option value="3">6 Wheeler Forward Trucks (2 Wing vans and 3 Close vans)</option>
                                    <option value="4">6 Wheeler Elf Trucks (3 Wing vans and 5 Close vans)</option>
                                    <option value="5">4 Wheelers (3 close vans 2 FB body type)</option>
                                    <option value="6">L300 (3 FB body Type and 1 close van)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Email"
                                    id="input-email"
                                    maxlength="100"
                                >
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Phone"
                                    id="input-phone"
                                    maxlength="100"
                                >
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Pickup Time"
                                    id="input-pickup-time"
                                    maxlength="100"
                                >
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Drop Location"
                                    id="input-drop-location"
                                    maxlength="200"
                                >
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Type of Cargo"
                                    id="input-type-of-cargo"
                                    maxlength="200"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea
                                class="form-control"
                                rows="4"
                                placeholder="Enter specific instructions, etc."
                                id="input-other-details"
                                maxlength="600"
                            ></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn cwlt-success" id="button-submit-quote">Submit</button>
            </div>
        </div>
    </div>
</div>