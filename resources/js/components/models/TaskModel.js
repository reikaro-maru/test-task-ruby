import {equal, integer, min, required, string} from 'vue-mc/validation';
import Model from 'vue-mc'

export default class TaskModel extends Model
{
    // Default attributes that define the "empty" state.
    defaults() {
        return {
            id:   null,
            description: ''
        }
    }

    // Attribute mutations.
    mutations() {
        return {
            id:   (id) => Number(id) || null,
            description: String,
            status: Boolean,
            project_id: null
        }
    }

    validation() {
        return {
            id:   integer.and(min(1)).or(equal(null)),
            description:   string.and(required),
            status: boolean.and(required),
            project_id: required.and(integer)
        };
    }

    // Route configuration
    routes() {
        return {
            fetch: '/tasks/{id}',
            save:  '/tasks/add',
            delete:  '/tasks/destroy/{id}'
        }
    }
}

