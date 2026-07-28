<div
    class="modal fade"
    id="appointment-referral-modal"
    tabindex="-1"
    aria-labelledby="appointment-referral-title"
    aria-hidden="true"
>
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content text-dark">
            <form id="appointment-referral-form">
                @csrf

                <div class="modal-header">
                    <div>
                        <h5
                            class="modal-title fw-bold text-dark"
                            id="appointment-referral-title"
                        >
                            Refer appointment
                        </h5>

                        <p class="mb-0 mt-1 text-dark">
                            Refer this patient to a CRM doctor
                            or an external healthcare professional.
                        </p>
                    </div>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>

                <div class="modal-body">
                    <input
                        type="hidden"
                        id="referral-appointment-id"
                    >

                    <div
                        id="referral-form-errors"
                        class="alert alert-danger d-none"
                        role="alert"
                    ></div>

                    <div class="row g-3">
                        <div class="col-12">
                            <fieldset>
                                <legend class="form-label fw-bold">
                                    Where is the patient being
                                    referred?
                                </legend>

                                <div class="d-flex flex-wrap gap-4">
                                    <label class="form-check">
                                        <input
                                            class="form-check-input referral-type-input"
                                            type="radio"
                                            name="referral_type"
                                            value="external"
                                            checked
                                        >

                                        <span
                                            class="form-check-label text-dark"
                                        >
                                            External doctor
                                        </span>
                                    </label>

                                    <label class="form-check">
                                        <input
                                            class="form-check-input referral-type-input"
                                            type="radio"
                                            name="referral_type"
                                            value="internal"
                                        >

                                        <span
                                            class="form-check-label text-dark"
                                        >
                                            Doctor registered in CRM
                                        </span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>

                        <div
                            class="col-12 d-none"
                            id="internal-doctor-section"
                        >
                            <label
                                for="receiving_doctor_id"
                                class="form-label fw-bold text-dark"
                            >
                                Receiving CRM doctor
                                <span aria-hidden="true">*</span>
                            </label>

                            <select
                                class="form-select"
                                id="receiving_doctor_id"
                                name="receiving_doctor_id"
                            >
                                <option value="">
                                    Select a doctor
                                </option>
                            </select>
                        </div>

                        <div
                            class="col-md-6"
                            id="receiving-doctor-name-section"
                        >
                            <label
                                for="receiving_doctor_name"
                                class="form-label fw-bold text-dark"
                            >
                                Receiving doctor’s name
                                <span aria-hidden="true">*</span>
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="receiving_doctor_name"
                                name="receiving_doctor_name"
                                maxlength="255"
                            >
                        </div>

                        <div class="col-md-6">
                            <label
                                for="receiving_doctor_speciality"
                                class="form-label fw-bold text-dark"
                            >
                                Speciality
                                <span aria-hidden="true">*</span>
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="receiving_doctor_speciality"
                                name="receiving_doctor_speciality"
                                placeholder="For example: Cardiology"
                                maxlength="255"
                                required
                            >
                        </div>

                        <div class="col-md-6">
                            <label
                                for="receiving_organisation_name"
                                class="form-label fw-bold text-dark"
                            >
                                Hospital or organisation
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="receiving_organisation_name"
                                name="receiving_organisation_name"
                                maxlength="255"
                            >
                        </div>

                        <div class="col-md-6">
                            <label
                                for="receiving_doctor_email"
                                class="form-label fw-bold text-dark"
                            >
                                Email
                            </label>

                            <input
                                type="email"
                                class="form-control"
                                id="receiving_doctor_email"
                                name="receiving_doctor_email"
                                maxlength="255"
                            >
                        </div>

                        <div class="col-md-6">
                            <label
                                for="receiving_doctor_phone"
                                class="form-label fw-bold text-dark"
                            >
                                Telephone
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="receiving_doctor_phone"
                                name="receiving_doctor_phone"
                                maxlength="40"
                            >
                        </div>

                        <div class="col-md-6">
                            <label
                                for="urgency"
                                class="form-label fw-bold text-dark"
                            >
                                Urgency
                                <span aria-hidden="true">*</span>
                            </label>

                            <select
                                class="form-select"
                                id="urgency"
                                name="urgency"
                                required
                            >
                                <option value="routine">
                                    Routine
                                </option>

                                <option value="urgent">
                                    Urgent
                                </option>

                                <option value="emergency">
                                    Emergency
                                </option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label
                                for="receiving_doctor_address"
                                class="form-label fw-bold text-dark"
                            >
                                Address
                            </label>

                            <textarea
                                class="form-control"
                                id="receiving_doctor_address"
                                name="receiving_doctor_address"
                                rows="2"
                            ></textarea>
                        </div>

                        <div class="col-12">
                            <label
                                for="referral_reason"
                                class="form-label fw-bold text-dark"
                            >
                                Reason for referral
                                <span aria-hidden="true">*</span>
                            </label>

                            <textarea
                                class="form-control"
                                id="referral_reason"
                                name="referral_reason"
                                rows="3"
                                required
                            ></textarea>
                        </div>

                        <div class="col-12">
                            <label
                                for="clinical_summary"
                                class="form-label fw-bold text-dark"
                            >
                                Clinical summary
                                <span aria-hidden="true">*</span>
                            </label>

                            <textarea
                                class="form-control"
                                id="clinical_summary"
                                name="clinical_summary"
                                rows="5"
                                required
                            ></textarea>
                        </div>

                        <div class="col-md-6">
                            <label
                                for="diagnosis"
                                class="form-label fw-bold text-dark"
                            >
                                Diagnosis
                            </label>

                            <textarea
                                class="form-control"
                                id="diagnosis"
                                name="diagnosis"
                                rows="3"
                            ></textarea>
                        </div>

                        <div class="col-md-6">
                            <label
                                for="requested_action"
                                class="form-label fw-bold text-dark"
                            >
                                Requested action
                            </label>

                            <textarea
                                class="form-control"
                                id="requested_action"
                                name="requested_action"
                                rows="3"
                                placeholder="Assessment, tests, treatment or advice requested"
                            ></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-outline-dark"
                        data-bs-dismiss="modal"
                    >
                        Cancel
                    </button>

                    <button
                        type="submit"
                        class="btn btn-dark"
                        id="save-appointment-referral"
                    >
                        Save referral
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>