import {equal, integer, min, required, string} from 'vue-mc/validation';
import {Model, Collection} from 'vue-mc'

export default class ProjectModel extends Model
{
    // Default attributes that define the "empty" state.
    defaults() {
        return {
            id:   null,
            project_name: '',
            user_id: null
        }
    }

    // Attribute mutations.
    mutations() {
        return {
            id:   (id) => Number(id) || null,
            project_name: String
        }
    }

    validation() {
        return {
            id:   integer.and(min(1)).or(equal(null)),
            project_name:   string.and(required),
            user_id: required.and(integer)
        };
    }

    // Route configuration
    routes() {
        return {
            fetch: '/projects/{id}',
            save:  '/projects/add',
            delete:  '/projects/destroy/{id}'
        }
    }
}

/**
 * Task collection
 */
class ProjectCollection extends Collection {

    // Model that is contained in this collection.
    model() {
        return ProjectModel;
    }

    // Default attributes
    defaults() {
        return {
            orderBy: 'project_name',
        }
    }

    // Route configuration
    routes() {
        return {
            fetch: '/projects',
            // save:  '/projects/add',
            // delete:  '/projects/destroy/{id}'
        }
    }

}
