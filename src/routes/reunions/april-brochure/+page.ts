import { redirect } from '@sveltejs/kit';

/** @type {import('./$types').PageLoad} */
export function load({ route }) {
    throw redirect(303, route.id + '/1');
}
