import { Controller } from "@hotwired/stimulus"

// Connects to data-controller="rubrics-calculator"
export default class extends Controller {
    static targets = ["point", "total", "warning", "submit"]
    connect() {
        this.maximum_points = 100
    }

    calculateTotals(event){
        const current_target = event.currentTarget
        const { rubricName } = current_target.dataset
        current_target.value = parseInt(current_target.value) || 0
        
        this.resetPointsState()
        this.total = 0

        this.pointTargets.forEach(
            (element) => {
                const { rubricName } = element.dataset
                const value = parseInt(element.value)
                this.total += value
                this.points[rubricName] += value
            }
        )

        const rubric_header = this.element.querySelector(`h4[data-rubric-name="${rubricName}"]`)
        
        rubric_header.innerHTML = `${rubric_header.innerHTML.split(" - ")[0]} - ${this.points[rubricName]} Points`
        this.totalTarget.innerHTML = `Total ${this.total}/100`

        if(this.total > this.maximum_points)
        {
            this.submitTarget.classList.add("disabled")
            this.totalTarget.classList.add("text-danger")
            this.warningTarget.classList.remove("d-none")
        }else{
            this.submitTarget.classList.remove("disabled")
            this.totalTarget.classList.remove("text-danger")
            this.warningTarget.classList.add("d-none")
        }
    }

    resetPointsState(){
        this.points = {
            "academic_excellence"   : 0,
            "intellectual_curiosity": 0,
            "communication_skills"  : 0,
            "leadership_and_service": 0,
            "overall_impression"    : 0
          }
    }
}
