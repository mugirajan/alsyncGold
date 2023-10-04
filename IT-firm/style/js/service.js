// Function to handle the Intersection Observer callback
function handleIntersection(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        // Stop observing once the animation has occurred
        observer.unobserve(entry.target);
      }
    });
  }
  
  // Create an Intersection Observer
  const observer = new IntersectionObserver(handleIntersection, { threshold: 0.5 });
  
  // Get all elements with the .animate-on-scroll class
  const elements = document.querySelectorAll('.animate-on-scroll');
  
  // Observe each element
  elements.forEach((element) => {
    observer.observe(element);
  });
  

  