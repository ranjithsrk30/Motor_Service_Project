class AutomobileFormValidator {
    private form: HTMLFormElement;

    constructor(formId: string) {
        this.form = document.getElementById(formId) as HTMLFormElement;
        if (!this.form) {
            throw new Error(`Form with id '${formId}' not found`);
        }
        this.form.addEventListener('submit', this.handleSubmit.bind(this));
        this.populateForm(); // Populate form fields if data is available in local storage
    }

    private handleSubmit(event: Event) {
        event.preventDefault(); 

        if (this.validateForm()) {
            console.log('Form is valid, submitting...');
            this.storeFormData(); // Store form data in local storage
        } else {
            console.log('Form is not valid');
        }
    }

    private validateForm(): boolean {
        let isValid = true;
        // Add your validation logic here
        return isValid;
    }

    private storeFormData() {
        const formData = new FormData(this.form);
        formData.forEach((value, key) => {
            localStorage.setItem(key, value as string);
        });
        console.log('Form data stored successfully');
    }

    private populateForm() {
        const formData = new FormData(this.form);
        formData.forEach((value, key) => {
            const input = this.form.querySelector(`[name="${key}"]`) as HTMLInputElement;
            if (input) {
                const storedValue = localStorage.getItem(key);
                if (storedValue !== null) {
                    input.value = storedValue;
                }
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', function () {
    try {
        new AutomobileFormValidator('autoForm');
    } catch (error) {
        console.error(error);
    }
});
