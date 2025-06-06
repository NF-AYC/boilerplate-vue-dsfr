/**
 * Fichier contenant des fonctions réutilisables dans le projet
 *
 */

/**
 * Formate un date donnée
 */
export function formatDate (date: string): string {
  return new Date(date).toLocaleDateString()
}

export function capitalize (str: string): string {
  return str.charAt(0).toUpperCase() + str.slice(1)
}
