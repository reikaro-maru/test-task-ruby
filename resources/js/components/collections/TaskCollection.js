import TaskModel from "@/models/TaskModel";
import Collection from 'vue-mc'

/**
 * Task collection
 */
export default class TaskCollection extends Collection {

    // Model that is contained in this collection.
    model() {
        return TaskModel;
    }

    // Default attributes
    defaults() {
        return {
            orderBy: 'status',
        }
    }

    // Route configuration
    routes() {
        return {
            fetch: '/projects/{project_id}/tasks',
            save:  '/projects/{project_id}/tasks/batchUpdate',
            delete:  '/projects/{project_id}/tasks/batchDelete'
        }
    }

}
