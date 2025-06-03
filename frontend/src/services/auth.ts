/**
 * auth.ts - Authentication service.
 *
 * This service provides functions to handle user authentication.
 */

import api from './api'

export function getCSRFToken () {
  return api.get('/sanctum/csrf-cookie')
}

/**
 * Logs in a user.
 * @param {object} credentials - The user credentials.
 * @returns {Promise} The API response.
 */
export function login (credentials: { email: string, password: string }) {
  return api.post('/auth/login', credentials)
}

/**
 * Registers a new user.
 * @param {object} userData - The user data.
 * @returns {Promise} The API response.
 */
export function register (userData: { name: string, email: string, password: string }) {
  return api.post('/auth/register', userData)
}

/**
 * Logs out the current user.
 * @returns {Promise} The API response.
 */
export function logout () {
  return post('/auth/logout')
}

export async function testCompleteAuth () {
  try {
    console.log('=== 1. Clear cookies ===')
    document.cookie = 'laravel_session=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;'

    console.log('=== 2. Get CSRF cookie ===')
    await api.get('/../sanctum/csrf-cookie')
    console.log('Cookies after CSRF:', document.cookie)

    console.log('=== 3. Debug auth before login ===')
    const debugBefore = await api.get('/debug-auth')
    console.log('Auth status before login:', debugBefore.data)

    console.log('=== 4. Login ===')
    const loginResponse = await api.post('/auth/login', {
      email: 'yoan@test.com', // Utilisez un email qui existe
      password: 'password'
    })
    console.log('Login response:', loginResponse.data)

    console.log('=== 5. Debug auth after login ===')
    const debugAfter = await api.get('/debug-auth')
    console.log('Auth status after login:', debugAfter.data)

    console.log('=== 6. Test /user route ===')
    const userResponse = await api.get('/tasks')
    console.log('User response:', userResponse.data)
  }
  catch (error) {
    console.error('Error details:', {
      status: error.response?.status,
      data: error.response?.data,
      headers: error.response?.headers,
    })
  }
}
