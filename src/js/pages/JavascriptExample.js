/**
 * js for the example page
 */
export class JavascriptExample {
    constructor() {
        $('#detail-modal').on('show.bs.modal', (event) =>
            this.updateModalContent(event.relatedTarget.dataset.id)
        );

        this.tableRows = JSON.parse($('#index-data').html());
        this.modalContent = {
            name: '',
            email: '',
            status: '',
        };
    }

    updateModalContent(id) {
        this.modalContent = this.tableRows[id];

        $('#detail-modal [data-key=name]').html(this.modalContent.name);
        $('#detail-modal [data-key=email]').html(this.modalContent.email);
        $('#detail-modal [data-key=status]').html(this.modalContent.status);

        return this;
    }
}