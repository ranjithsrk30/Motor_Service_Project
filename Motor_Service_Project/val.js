var AutomobileFormValidator = /** @class */ (function () {
    function AutomobileFormValidator(formId) {
        this.form = document.getElementById(formId);
        if (!this.form) {
            throw new Error("Form with id '".concat(formId, "' not found"));
        }
        this.form.addEventListener('submit', this.handleSubmit.bind(this));
        this.populateForm(); // Populate form fields if data is available in local storage
    }
    AutomobileFormValidator.prototype.handleSubmit = function (event) {
        event.preventDefault();
        if (this.validateForm()) {
            console.log('Form is valid, submitting...');
            this.storeFormData(); // Store form data in local storage
        }
        else {
            console.log('Form is not valid');
        }
    };
    AutomobileFormValidator.prototype.validateForm = function () {
        var isValid = true;
        // Add your validation logic here
        return isValid;
    };
    AutomobileFormValidator.prototype.storeFormData = function () {
        var formData = new FormData(this.form);
        formData.forEach(function (value, key) {
            localStorage.setItem(key, value);
        });
        console.log('Form data stored successfully');
    };
    AutomobileFormValidator.prototype.populateForm = function () {
        var _this = this;
        var formData = new FormData(this.form);
        formData.forEach(function (value, key) {
            var input = _this.form.querySelector("[name=\"".concat(key, "\"]"));
            if (input) {
                var storedValue = localStorage.getItem(key);
                if (storedValue !== null) {
                    input.value = storedValue;
                }
            }
        });
    };
    return AutomobileFormValidator;
}());
document.addEventListener('DOMContentLoaded', function () {
    try {
        new AutomobileFormValidator('autoForm');
    }
    catch (error) {
        console.error(error);
    }
});
