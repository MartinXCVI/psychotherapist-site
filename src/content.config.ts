import { defineCollection, z } from "astro:content";

const homeLanding = defineCollection({
  type: "content",
  schema: z.object({
    title: z.string().optional()
  })
})

const aboutLanding = defineCollection({
  type: "content",
  schema: z.object({
    title: z.string().optional()
  })
})

const helpLanding = defineCollection({
  type: "content",
  schema: z.object({
    title: z.string().optional()
  })
})

const contactLanding = defineCollection({
  type: "content",
  schema: z.object({
    title: z.string().optional()
  })
})

const testimonialsLanding = defineCollection({
  type: "content",
  schema: z.object({
    title: z.string().optional()
  })
})


export const collections = {
  home: homeLanding,
  about: aboutLanding,
  help: helpLanding,
  contact: contactLanding,
  testimonials: testimonialsLanding
}