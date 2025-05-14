import os
import logging
from flask import Flask, render_template, request, redirect, url_for, flash
from forms import ContactForm, RepairRequestForm
from data import (
    services, 
    repair_services, 
    product_categories, 
    testimonials,
    get_repair_requests,
    add_repair_request,
    get_contact_messages,
    add_contact_message,
    faqs
)

# Configure logging
logging.basicConfig(level=logging.DEBUG)

# Create Flask app
app = Flask(__name__)
app.secret_key = os.environ.get("SESSION_SECRET", "dev-key-for-flash-messages")

@app.route('/')
def home():
    featured_services = services[:3]
    featured_products = [product_categories[key][0] for key in list(product_categories.keys())[:3]]
    form = RepairRequestForm()
    return render_template(
        'index.html', 
        featured_services=featured_services,
        featured_products=featured_products,
        testimonials=testimonials[:3],
        form=form
    )

@app.route('/about')
def about():
    return render_template('about.html')

@app.route('/services')
def services_page():
    return render_template(
        'services.html', 
        services=services, 
        repair_services=repair_services
    )

@app.route('/products')
def products():
    return render_template('products.html', product_categories=product_categories)

@app.route('/contact', methods=['GET', 'POST'])
def contact():
    form = ContactForm()
    if request.method == 'POST':
        if form.validate_on_submit():
            name = request.form.get('name')
            email = request.form.get('email')
            phone = request.form.get('phone')
            message = request.form.get('message')
            
            add_contact_message(name, email, phone, message)
            flash('Your message has been sent! We will contact you soon.', 'success')
            return redirect(url_for('contact'))
        else:
            flash('There was an error with your submission. Please check your inputs.', 'danger')
    
    return render_template('contact.html', form=form)

@app.route('/repair-request', methods=['POST'])
def repair_request():
    form = RepairRequestForm()
    if form.validate_on_submit():
        name = request.form.get('name')
        email = request.form.get('email')
        phone = request.form.get('phone')
        device = request.form.get('device')
        issue = request.form.get('issue')
        
        add_repair_request(name, email, phone, device, issue)
        flash('Your repair request has been submitted! We will contact you shortly.', 'success')
    else:
        flash('There was an error with your submission. Please check your inputs.', 'danger')
    
    return redirect(url_for('home'))

@app.route('/faq')
def faq():
    return render_template('faq.html', faqs=faqs)

@app.errorhandler(404)
def page_not_found(e):
    return render_template('404.html'), 404

@app.errorhandler(500)
def server_error(e):
    return render_template('500.html'), 500
