@extends("layout.default")
@section("content")
    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">
                <div class="container-fluid"><!-- Hidden label form layout section start -->
                    <section id="hidden-label-form-layouts">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="content-header">Hidden Form Labels</h2>
                            </div>
                        </div>
                        <div class="row match-height">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title-wrap bar-success">
                                            <h4 class="card-title" id="hidden-label-basic-form">Cost Estimation</h4>
                                        </div>
                                        <p class="mb-0">This is the most basic and cost estimation form is the default
                                            position. Just add
                                            <code>.sr-only</code> class to a label to hide.</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="px-3">
                                            <form class="form">
                                                <div class="form-body">
                                                    <h4 class="form-section">
                                                        <i class="icon-user"></i> Personal Details</h4>
                                                    <div class="row">
                                                        <div class="form-group col-md-6 mb-2">
                                                            <label class="sr-only" for="projectinput1">First
                                                                Name</label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                   placeholder="First Name" name="fname">
                                                        </div>
                                                        <div class="form-group col-md-6 mb-2">
                                                            <label class="sr-only" for="projectinput2">Last Name</label>
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                   placeholder="Last Name" name="lname">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6 mb-2">
                                                            <label class="sr-only" for="projectinput3">E-mail</label>
                                                            <input type="text" id="projectinput3" class="form-control"
                                                                   placeholder="E-mail" name="email">
                                                        </div>
                                                        <div class="form-group col-md-6 mb-2">
                                                            <label class="sr-only" for="projectinput4">Contact
                                                                Number</label>
                                                            <input type="text" id="projectinput4" class="form-control"
                                                                   placeholder="Phone" name="phone">
                                                        </div>
                                                    </div>

                                                    <h4 class="form-section">
                                                        <i class="icon-book-open"></i>Project Requirements</h4>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="projectinput5">Company</label>
                                                            <input type="text" id="projectinput5" class="form-control"
                                                                   placeholder="Company Name" name="company">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-6 mb-2">
                                                            <label class="sr-only" for="projectinput6">Interested
                                                                in</label>
                                                            <select id="projectinput6" name="interested"
                                                                    class="form-control">
                                                                <option value="none" selected="" disabled="">Interested
                                                                    in
                                                                </option>
                                                                <option value="design">design</option>
                                                                <option value="development">development</option>
                                                                <option value="illustration">illustration</option>
                                                                <option value="branding">branding</option>
                                                                <option value="video">video</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-6 mb-2">
                                                            <label class="sr-only" for="projectinput7">Budget</label>
                                                            <select id="projectinput7" name="budget"
                                                                    class="form-control">
                                                                <option value="0" selected="" disabled="">Budget
                                                                </option>
                                                                <option value="less than 5000$">less than 5000$</option>
                                                                <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                                <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                                <option value="more than 20000$">more than 20000$
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only">Select File</label>
                                                            <label id="projectinput8" class="file center-block">
                                                                <input type="file" id="file">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="projectinput9">Project
                                                                Brief</label>
                                                            <textarea id="projectinput9" rows="5" class="form-control"
                                                                      name="comment"
                                                                      placeholder="Project Brief"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-actions">
                                                    <button type="button" class="btn btn-danger mr-1">
                                                        <i class="icon-trash"></i> Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-success">
                                                        <i class="icon-note"></i> Save
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title-wrap bar-warning">
                                            <h4 class="card-title" id="hidden-label-colored-controls">Company
                                                Registration</h4>
                                        </div>
                                        <p class="mb-0">Just add
                                            <code>.sr-only</code> class to a label to hide. Form action buttons are on
                                            the bottom right position.</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="px-3">
                                            <form class="form">
                                                <div class="form-body">
                                                    <h4 class="form-section">
                                                        <i class="icon-direction"></i> Owner Detail</h4>
                                                    <div class="row">
                                                        <div class="form-group col-md-6 mb-2">
                                                            <label class="sr-only" for="userinput1">First Name</label>
                                                            <input type="text" id="userinput1"
                                                                   class="form-control border-primary"
                                                                   placeholder="Name" name="name">
                                                        </div>
                                                        <div class="form-group col-md-6 mb-2">
                                                            <label class="sr-only" for="userinput2">Last Name</label>
                                                            <input type="text" id="userinput2"
                                                                   class="form-control border-primary"
                                                                   placeholder="Company" name="company">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6 mb-2">
                                                            <label class="sr-only" for="userinput3">Email</label>
                                                            <input type="email" id="userinput3"
                                                                   class="form-control border-primary"
                                                                   placeholder="Email Address" name="email">
                                                        </div>
                                                        <div class="form-group col-md-6 mb-2">
                                                            <label class="sr-only" for="userinput4">Mobile</label>
                                                            <input type="text" id="userinput4"
                                                                   class="form-control border-primary"
                                                                   placeholder="Mobile Number" name="mobile">
                                                        </div>
                                                    </div>

                                                    <h4 class="form-section">
                                                        <i class="ft-mail"></i> Company Info</h4>
                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="userinput5">Email</label>
                                                            <input class="form-control border-primary" type="email"
                                                                   placeholder="email" id="userinput5">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="userinput6">Website</label>
                                                            <input class="form-control border-primary" type="url"
                                                                   placeholder="http://" id="userinput6">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only">Contact Number</label>
                                                            <input class="form-control border-primary" type="tel"
                                                                   placeholder="Contact Number" id="userinput7">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="userinput8">Company
                                                                Address</label>
                                                            <textarea id="userinput8" rows="5"
                                                                      class="form-control border-primary" name="address"
                                                                      placeholder="Company Address"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-actions right">
                                                    <button type="button" class="btn btn-danger mr-1">
                                                        <i class="icon-trash"></i> Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-success">
                                                        <i class="icon-note"></i> Save
                                                    </button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row match-height">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title-wrap bar-primary">
                                            <h4 class="card-title" id="hidden-label-tooltips">Issue Tracking</h4>
                                        </div>
                                        <p class="mb-0">Just add
                                            <code>.sr-only</code> class to a label to hide. This form shows tooltips on
                                            hover to provide useful information while user is filling the
                                            form. Use data attributes like toggle
                                            <code>data-toggle</code>, trigger
                                            <code>data-trigger</code>, placement
                                            <code>data-placement</code>, title
                                            <code>data-title</code> to show tooltips on form controls.</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="px-3">

                                            <form class="form">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="issueinput1">Issue Title</label>
                                                            <input type="text" id="issueinput1" class="form-control"
                                                                   placeholder="issue title" name="issuetitle"
                                                                   data-toggle="tooltip"
                                                                   data-trigger="hover" data-placement="top"
                                                                   data-title="Issue Title">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="issueinput2">Opened By</label>
                                                            <input type="text" id="issueinput2" class="form-control"
                                                                   placeholder="opened by" name="openedby"
                                                                   data-toggle="tooltip" data-trigger="hover"
                                                                   data-placement="top" data-title="Opened By">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6 mb-2">
                                                            <label class="sr-only" for="issueinput3">Date Opened</label>
                                                            <input type="date" id="issueinput3" class="form-control"
                                                                   name="dateopened" data-toggle="tooltip"
                                                                   data-trigger="hover" data-placement="top"
                                                                   data-title="Date Opened">
                                                        </div>
                                                        <div class="form-group col-md-6 mb-2">
                                                            <label class="sr-only" for="issueinput4">Date Fixed</label>
                                                            <input type="date" id="issueinput4" class="form-control"
                                                                   name="datefixed" data-toggle="tooltip"
                                                                   data-trigger="hover" data-placement="top"
                                                                   data-title="Date Fixed">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="issueinput5">Priority</label>
                                                            <select id="issueinput5" name="priority"
                                                                    class="form-control" data-toggle="tooltip"
                                                                    data-trigger="hover" data-placement="top"
                                                                    data-title="Priority">
                                                                <option value="low">Low</option>
                                                                <option value="medium">Medium</option>
                                                                <option value="high">High</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="issueinput6">Status</label>
                                                            <select id="issueinput6" name="status" class="form-control"
                                                                    data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top"
                                                                    data-title="Status">
                                                                <option value="not started">Not Started</option>
                                                                <option value="started">Started</option>
                                                                <option value="fixed">Fixed</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="issueinput8">Comments</label>
                                                            <textarea id="issueinput8" rows="5" class="form-control"
                                                                      name="comments" placeholder="comments"
                                                                      data-toggle="tooltip" data-trigger="hover"
                                                                      data-placement="top"
                                                                      data-title="Comments"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-actions">
                                                    <button type="button" class="btn btn-danger mr-1">
                                                        <i class="icon-trash"></i> Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-success">
                                                        <i class="icon-note"></i> Save
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title-wrap bar-danger">
                                            <h4 class="card-title" id="hidden-label-icons">Timesheet</h4>
                                        </div>
                                        <p class="mb-0">Just add
                                            <code>.sr-only</code> class to a label to hide. This form shows the use of
                                            icons with form controls. Define the position of the icon using
                                            <code>has-icon-left</code> or
                                            <code>has-icon-right</code> class. Use
                                            <code>icon-*</code> class to define the icon for the form control. See Icons
                                            sections for the list of icons you can use. </p>
                                    </div>
                                    <div class="card-body">
                                        <div class="px-3">

                                            <form class="form">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="timesheetinput1">Employee
                                                                Name</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" id="timesheetinput1"
                                                                       class="form-control" placeholder="employee name"
                                                                       name="employeename">
                                                                <div class="form-control-position">
                                                                    <i class="ft-user"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="timesheetinput2">Project
                                                                Name</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" id="timesheetinput2"
                                                                       class="form-control" placeholder="project name"
                                                                       name="projectname">
                                                                <div class="form-control-position">
                                                                    <i class="fa fa-briefcase"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="timesheetinput3">Date</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="date" id="timesheetinput3"
                                                                       class="form-control" name="date">
                                                                <div class="form-control-position">
                                                                    <i class="ft-message-square"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only">Rate Per Hour</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">$</span>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                       placeholder="Rate Per Hour"
                                                                       aria-label="Amount (to the nearest dollar)"
                                                                       name="rateperhour">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-6 mb-2">
                                                            <label class="sr-only" for="timesheetinput5">Start
                                                                Time</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="time" id="timesheetinput5"
                                                                       class="form-control" name="starttime">
                                                                <div class="form-control-position">
                                                                    <i class="ft-clock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6 mb-2">
                                                            <label class="sr-only" for="timesheetinput6">End
                                                                Time</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="time" id="timesheetinput6"
                                                                       class="form-control" name="endtime">
                                                                <div class="form-control-position">
                                                                    <i class="ft-clock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="timesheetinput7">Notes</label>
                                                            <div class="position-relative has-icon-left">
                                                                <textarea id="timesheetinput7" rows="5"
                                                                          class="form-control" name="notes"
                                                                          placeholder="notes"></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="ft-file"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-actions right">
                                                    <button type="button" class="btn btn-danger mr-1">
                                                        <i class="icon-trash"></i> Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-success">
                                                        <i class="icon-note"></i> Save
                                                    </button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row match-height">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title-wrap bar-info">
                                            <h4 class="card-title" id="hidden-label-round-controls">Complaint Form</h4>
                                        </div>
                                        <p class="mb-0">Just add
                                            <code>.sr-only</code> class to a label to hide. This is a variation to the
                                            default form control styling. In this example all the form controls
                                            has round styling. To apply round style add class
                                            <code>round</code> to any form control.</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="px-3">
                                            <form class="form">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="complaintinput1">Company
                                                                Name</label>
                                                            <input type="text" id="complaintinput1"
                                                                   class="form-control round" placeholder="company name"
                                                                   name="companyname">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="complaintinput2">Employee
                                                                Name</label>
                                                            <input type="text" id="complaintinput2"
                                                                   class="form-control round"
                                                                   placeholder="employee name" name="employeename">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="complaintinput3">Date of
                                                                Complaint</label>
                                                            <input type="date" id="complaintinput3"
                                                                   class="form-control round" name="complaintdate">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="complaintinput4">Supervisor's
                                                                Name</label>
                                                            <input type="text" id="complaintinput4"
                                                                   class="form-control round"
                                                                   placeholder="supervisor name" name="supervisorname">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="complaintinput5">Complaint
                                                                Details</label>
                                                            <textarea id="complaintinput5" rows="5"
                                                                      class="form-control round" name="complaintdetails"
                                                                      placeholder="details"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only"
                                                                   for="complaintinput6">Signature</label>
                                                            <input type="text" id="complaintinput6"
                                                                   class="form-control round" placeholder="signature"
                                                                   name="signature">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-actions">
                                                    <button type="button" class="btn btn-danger mr-1">
                                                        <i class="icon-trash"></i> Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-success">
                                                        <i class="icon-note"></i> Save
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title-wrap bar-success">
                                            <h4 class="card-title" id="hidden-label-square-controls">Donation</h4>
                                        </div>
                                        <p class="mb-0">Just add
                                            <code>.sr-only</code> class to a label to hide. This is another variation to
                                            the default form control styling. In this example all the form
                                            controls has square styling. To apply square style add class
                                            <code>square</code> to any form control.</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="px-3">
                                            <form class="form">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="donationinput1">Full
                                                                Name</label>
                                                            <input type="text" id="donationinput1"
                                                                   class="form-control square" placeholder="name"
                                                                   name="fullname">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="donationinput2">Email</label>
                                                            <input type="email" id="donationinput2"
                                                                   class="form-control square" placeholder="email"
                                                                   name="email">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="donationinput3">Contact
                                                                Number</label>
                                                            <input type="tel" id="donationinput3"
                                                                   class="form-control square" name="contact">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="donationinput4">Dontaion
                                                                Type</label>
                                                            <input type="text" id="donationinput4"
                                                                   class="form-control square"
                                                                   placeholder="type of donation" name="donationtype">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only">Amount</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">$</span>
                                                                </div>
                                                                <input type="text" class="form-control square"
                                                                       placeholder="amount"
                                                                       aria-label="Amount (to the nearest dollar)"
                                                                       name="amount">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="donationinput7">Comments</label>
                                                            <textarea id="donationinput7" rows="5"
                                                                      class="form-control square" name="comments"
                                                                      placeholder="comments"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-actions right">
                                                    <button type="button" class="btn btn-danger mr-1">
                                                        <i class="icon-trash"></i> Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-success">
                                                        <i class="icon-note"></i> Save
                                                    </button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title-wrap bar-warning">
                                            <h4 class="card-title" id="hidden-label-form-center">Event Registration</h4>
                                        </div>
                                        <p class="mb-0">Just add
                                            <code>.sr-only</code> class to a label to hide. This example shows a way to
                                            center your form in the card. Here we have used
                                            <code>.justify-content-md-center .row</code> classes to center the form in a
                                            full width card. User can always change those classes according to width and
                                            offset
                                            requirements. This example also uses form action buttons in the center
                                            bottom position of the card.</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="px-3">
                                            <form class="form">
                                                <div class="row justify-content-md-center">
                                                    <div class="col-md-6">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="form-group col-12 mb-2">
                                                                    <label class="sr-only" for="eventRegInput1">Full
                                                                        Name</label>
                                                                    <input type="text" id="eventRegInput1"
                                                                           class="form-control" placeholder="name"
                                                                           name="fullname">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-12 mb-2">
                                                                    <label class="sr-only"
                                                                           for="eventRegInput2">Title</label>
                                                                    <input type="text" id="eventRegInput2"
                                                                           class="form-control" placeholder="title"
                                                                           name="title">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-12 mb-2">
                                                                    <label class="sr-only"
                                                                           for="eventRegInput3">Company</label>
                                                                    <input type="text" id="eventRegInput3"
                                                                           class="form-control" placeholder="company"
                                                                           name="company">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-12 mb-2">
                                                                    <label class="sr-only"
                                                                           for="eventRegInput4">Email</label>
                                                                    <input type="email" id="eventRegInput4"
                                                                           class="form-control" placeholder="email"
                                                                           name="email">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-12 mb-2">
                                                                    <label class="sr-only" for="eventRegInput5">Contact
                                                                        Number</label>
                                                                    <input type="tel" id="eventRegInput5"
                                                                           class="form-control" name="contact"
                                                                           placeholder="contact number">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-12 mb-2">
                                                                    <label class="sr-only">Existing Customer</label>
                                                                    <div class="input-group">
                                                                        <div class="custom-control custom-radio display-inline-block ml-1">
                                                                            <input type="radio" id="customRadioInline1"
                                                                                   name="customRadioInline1"
                                                                                   class="custom-control-input">
                                                                            <label class="custom-control-label"
                                                                                   for="customRadioInline1">Yes</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio display-inline-block">
                                                                            <input type="radio" id="customRadioInline2"
                                                                                   checked name="customRadioInline1"
                                                                                   class="custom-control-input">
                                                                            <label class="custom-control-label"
                                                                                   for="customRadioInline2">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-actions center">
                                                    <button type="button" class="btn btn-danger mr-1">
                                                        <i class="icon-trash"></i> Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-success">
                                                        <i class="icon-note"></i> Save
                                                    </button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title-wrap bar-primary">
                                            <h4 class="card-title" id="hidden-label-card-center">Event Registration</h4>
                                        </div>
                                        <p class="mb-0">Just add
                                            <code>.sr-only</code> class to a label to hide. This example shows a ways to
                                            center your card with form. Here we have used
                                            <code>.justify-content-md-center .row</code> classes to center the card as
                                            its not full width. User can always change those classes according to width
                                            and offset
                                            requirements. This example also uses form action buttons in the center
                                            bottom position of the card.</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="px-3">
                                            <form class="form">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="eventInput1">Full Name</label>
                                                            <input type="text" id="eventInput1" class="form-control"
                                                                   placeholder="name" name="fullname">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="eventInput2">Title</label>
                                                            <input type="text" id="eventInput2" class="form-control"
                                                                   placeholder="title" name="title">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="eventInput3">Company</label>
                                                            <input type="text" id="eventInput3" class="form-control"
                                                                   placeholder="company" name="company">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="eventInput4">Email</label>
                                                            <input type="email" id="eventInput4" class="form-control"
                                                                   placeholder="email" name="email">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only" for="eventInput5">Contact
                                                                Number</label>
                                                            <input type="tel" id="eventInput5" class="form-control"
                                                                   name="contact" placeholder="contact number">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 mb-2">
                                                            <label class="sr-only">Existing Customer</label>
                                                            <div class="input-group">
                                                                <div class="custom-control custom-radio display-inline-block ml-1">
                                                                    <input type="radio" id="customRadioInline3"
                                                                           name="customRadioInline2"
                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                           for="customRadioInline3">Yes</label>
                                                                </div>
                                                                <div class="custom-control custom-radio display-inline-block">
                                                                    <input type="radio" id="customRadioInline4" checked
                                                                           name="customRadioInline2"
                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                           for="customRadioInline4">No</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-actions center">
                                                    <button type="button" class="btn btn-danger mr-1">
                                                        <i class="icon-trash"></i> Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-success">
                                                        <i class="icon-note"></i> Save
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- // Hidden label form layout section end -->
                </div>
            </div>
        </div>

        <footer class="footer footer-static footer-light">
            <p class="clearfix text-muted text-center px-2"><span>Copyright  &copy; 2018 <a
                            href="https://1.envato.market/pixinvent_portfolio" id="pixinventLink" target="_blank"
                            class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
        </footer>

    </div>
@endsection