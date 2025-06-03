<script lang="ts" setup>
import { DsfrFooter } from '@gouvminint/vue-dsfr'

const afterMandatoryLinks = [
  {
    label: 'After',
    to: '/after'
  }
]

const beforeMandatoryLinks = [
  {
    label: 'Before',
    to: '/before'
  }
]

const ecosystemLinks = [
  {
    label: 'legifrance.gouv.fr',
    href: 'https://legifrance.gouv.fr'
  },
  {
    label: 'info.gouv.fr',
    href: 'https://info.gouv.fr'
  },
  {
    label: 'service-public.fr',
    href: 'https://service-public.fr'
  },
  {
    label: 'data.gouv.fr',
    href: 'https://data.gouv.fr'
  }
]

const logoText = ['République', 'des châtons']

const partners = {
  mainPartner: {
    name: 'Partenaire principal',
    href: 'https://www.youtube.com',
    logo: 'https://loremflickr.com/150/150/cat?random=1',
    alt: 'Partenaire principal'
  },
  subPartners: [
    {
      name: 'Partenaire secondaire 1',
      href: 'https://www.youtube.com',
      logo: 'https://loremflickr.com/150/150/cat?random=2',
      alt: 'Partenaire secondaire 1'
    },
    {
      name: 'Partenaire secondaire 2',
      href: 'https://www.youtube.com',
      logo: 'https://loremflickr.com/150/150/cat?random=3',
      alt: 'Partenaire secondaire 2'
    }
  ]
}
</script>

<template>
  <DsfrFooter
    a11y-compliance="partiellement conforme"
    a11y-compliance-link="/a11y-conformite"
    :after-mandatory-links="afterMandatoryLinks"
    :before-mandatory-links="beforeMandatoryLinks"
    cookies-link="/cookies"
    desc-text="Description"
    :ecosystem-links="ecosystemLinks"
    home-link="/"
    legal-link="/mentions-legales"
    licence-to="https://github.com/etalab/licence-ouverte/blob/master/LO.md"
    :logo-text="logoText"
    :partners="partners"
    personal-data-link="/donnees-personnelles"
  />
</template>
