/**
 * Lumetech Form Handling & AJAX Module
 */

export function initForms() {
  const forms = document.querySelectorAll('.lum-ajax-form');

  forms.forEach(form => {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      
      const submitBtn = form.querySelector('[type="submit"]');
      const originalText = submitBtn ? submitBtn.innerHTML : '';
      
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Processing...';
      }

      try {
        const formData = new FormData(form);
        const actionUrl = form.getAttribute('action') || '/api/submit-lead.php';

        const response = await fetch(actionUrl, {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest'
          }
        });

        const result = await response.json();

        if (result.success) {
          form.reset();
          showNotification('Success', result.message || 'Form submitted successfully!', 'success');
        } else {
          showNotification('Error', result.message || 'An error occurred. Please try again.', 'danger');
        }
      } catch (error) {
        showNotification('Submission Error', 'Network error or server unavailable.', 'danger');
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalText;
        }
      }
    });
  });
}

function showNotification(title, message, type = 'info') {
  const alertContainer = document.getElementById('lum-alert-container') || createAlertContainer();
  const alert = document.createElement('div');
  alert.className = `alert alert-${type} alert-dismissible fade show lum-alert`;
  alert.innerHTML = `
    <strong>${title}:</strong> ${message}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  `;
  alertContainer.appendChild(alert);

  setTimeout(() => {
    if (alert && alert.parentNode) {
      alert.classList.remove('show');
      setTimeout(() => alert.remove(), 150);
    }
  }, 5000);
}

function createAlertContainer() {
  const container = document.createElement('div');
  container.id = 'lum-alert-container';
  container.className = 'position-fixed bottom-0 end-0 p-3';
  container.style.zIndex = '1100';
  document.body.appendChild(container);
  return container;
}
