import { Controller } from "@hotwired/stimulus"
// Connects to data-controller="transferee-curriculum"
export default class extends Controller {
  static targets = ["container"]

  connect() {
    this.initialContainer = this.containerTarget.cloneNode(true);
    this.hideRemover = document.getElementById('remover')
    this.parentContainer = document.getElementById('parentContainer')
  }

  addContainer() {
    const container = this.containerTarget;
    const newContainer = this.initialContainer.cloneNode(true);
    newContainer.classList.add("mt-2");
    this.hideRemover.classList.remove('d-none')
    container.parentNode.insertBefore(newContainer, container.nextSibling);
  }

  removeContainer() {
    this.containerTarget.remove()
    if (this.parentContainer.childElementCount == 2) {this.hideRemover.classList.add('d-none')}
  }
}
