  <div x-data="{ showModal: false }">
      <!-- Button to trigger popup -->
      <button @click="showModal = true"
          class="px-4 py-2 text-white bg-blue-500 rounded-lg shadow-md transition duration-300 hover:bg-blue-600">Open
          Popup</button>

      <!-- Modal -->
      <div x-show="showModal" @click.self="showModal = false" class="fixed inset-0 z-50 bg-gray-800 bg-opacity-50"
          x-transition>

          <div class="p-4 mb-8 rounded-md border border-border bg-primary-bg">
              <h3 class="mb-3 text-lg font-semibold text-primary-text">
                  Post New Announcement
              </h3>
              <form class="space-y-4">
                  <div>
                      <label for="announcement-title" class="sr-only">Announcement Title</label>
                      <input type="text" id="announcement-title"
                          class="px-4 py-3 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent"
                          placeholder="Announcement Title" required />
                  </div>
                  <div>
                      <label for="announcement-content" class="sr-only">Announcement Content</label>
                      <textarea id="announcement-content" rows="5"
                          class="px-4 py-3 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent"
                          placeholder="Write your announcement here..." required></textarea>
                  </div>
                  <div class="text-right">
                      <button type="submit"
                          class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                          Post Announcement
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  </div>
