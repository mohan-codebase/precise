<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Scanning Solution Form</title>
    
    <!-- Site Dependencies -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <!-- Form Dependencies -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/scanning-solution-form.css">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>
<body>
   <?php include('includes/header.php'); ?>
    <div class="form-layout-wrapper">
        <!-- LEFT PANEL -->
        <div class="left-panel">
            <h1 class="lp-title">Get the Right 3D<br>Scanning Solution</h1>
            <p class="lp-subtitle">Book a Live Demo, Request a Quote, or Both &ndash; All in One Place.</p>
            
            <ul class="lp-benefits">
                <li><i class="fa-solid fa-circle-check"></i> Live Demo (Online / Onsite)</li>
                <li><i class="fa-solid fa-circle-check"></i> Commercial Proposal</li>
                <li><i class="fa-solid fa-circle-check"></i> Expert Consultation</li>
                <li><i class="fa-solid fa-circle-check"></i> Solution Recommendation</li>
                <li><i class="fa-solid fa-circle-check"></i> ROI & Technical Guidance</li>
            </ul>

            <div class="lp-stats-box">
                <div class="stat-item">
                    <img src="assets/images/scanning-solution-form/icon1.png" alt="Customers" class="stat-icon" onerror="this.src=''; this.className='fa-solid fa-users stat-fa-fallback';">
                    <div class="stat-number">300+</div>
                    <div class="stat-text">Industrial<br>Customers</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <img src="assets/images/scanning-solution-form/icon2.png" alt="Experience" class="stat-icon" onerror="this.src=''; this.className='fa-solid fa-star stat-fa-fallback';">
                    <div class="stat-number">10+</div>
                    <div class="stat-text">Years of<br>Experience</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <img src="assets/images/scanning-solution-form/icon3.png" alt="Geomagic" class="stat-icon" onerror="this.src=''; this.className='fa-solid fa-cube stat-fa-fallback';">
                    <div class="stat-number">50+</div>
                    <div class="stat-text">Geomagic<br>installations</div>
                </div>
            </div>

            <div class="lp-image-wrapper">
                <img src="assets/images/scanning-solution-form/left-img.png" alt="Scanning Process" class="lp-image" onerror="this.style.display='none'">
            </div>
        </div>

        <!-- RIGHT PANEL -->
        <div class="right-panel">
            <form action="scanning-solution-mail.php" method="POST" enctype="multipart/form-data" id="mainForm">
                <!-- STEP 1 -->
                <div id="step1" class="step-container active">
                    <div class="stepper-header">
                        <span class="step-count-text">Step 1 of 6</span>
                        <div class="stepper-dots">
                            <div class="dot active">1</div><div class="line"></div>
                            <div class="dot">2</div><div class="line"></div>
                            <div class="dot">3</div><div class="line"></div>
                            <div class="dot">4</div><div class="line"></div>
                            <div class="dot">5</div><div class="line"></div>
                            <div class="dot">6</div>
                        </div>
                    </div>

                    <h2 class="form-section-title">Your Contact Information</h2>
                    <p class="form-mandatory-text">All field marked with <span class="text-danger">*</span> are mandatory</p>

                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label>Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="full_name" id="full_name" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group full-width">
                            <label>Company Name <span class="text-danger">*</span></label>
                            <input type="text" name="company_name" id="company_name" placeholder="Enter Company name" required>
                        </div>
                        <div class="form-group full-width">
                            <label>Designation <span class="text-danger">*</span></label>
                            <input type="text" name="designation" id="designation" placeholder="Enter your Designation" required>
                        </div>
                        <div class="form-group full-width">
                            <label>Business Email <span class="text-danger">*</span></label>
                            <input type="email" name="business_email" id="business_email" placeholder="Enter your Business Email" required>
                        </div>
                        
                        <div class="form-group full-width">
                            <label>Mobile Number <span class="text-danger">*</span></label>
                            <div class="phone-input-group">
                                <select id="phoneCodeSelect" name="phone_code" required>
                                    <option value="" disabled selected>Code</option>
                                </select>
                                <input type="tel" id="mobile_number" name="mobile_number" placeholder="Enter mobile number" required>
                            </div>
                        </div>

                        <div class="form-group third-width">
                            <label>Country <span class="text-danger">*</span></label>
                            <select id="countrySelect" name="country" required>
                                <option value="" disabled selected>Select country</option>
                            </select>
                        </div>
                        <div class="form-group third-width">
                            <label>State <span class="text-danger">*</span></label>
                            <select id="stateSelect" name="state" required disabled>
                                <option value="" disabled selected>Select state</option>
                            </select>
                        </div>
                        <div class="form-group third-width">
                            <label>City <span class="text-danger">*</span></label>
                            <select id="citySelect" name="city" required disabled>
                                <option value="" disabled selected>Select city</option>
                            </select>
                        </div>

                        <div class="form-group half-width">
                            <label>Industry <span class="text-danger">*</span></label>
                            <select id="industrySelect" name="industry" required>
                                <option value="" disabled selected>Select Industry</option>
                                <option value="Automotive">Automotive</option>
                                <option value="Aerospace">Aerospace</option>
                                <option value="Healthcare">Healthcare</option>
                                <option value="Education">Education</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group half-width">
                            <label>Company Size <span class="text-danger">*</span></label>
                            <select id="companySizeSelect" name="company_size" required>
                                <option value="" disabled selected>Select Company Size</option>
                                <option value="1-50">1-50</option>
                                <option value="51-200">51-200</option>
                                <option value="201-500">201-500</option>
                                <option value="500+">500+</option>
                            </select>
                        </div>
                    </div>

                    <h3 class="form-subsection-title">What would you like to do today?</h3>
                    <div class="action-cards-grid">
                        <label class="action-card">
                            <input type="radio" name="intent" value="quote" style="display: none;" required>
                            <div class="action-card-content">
                                <img src="assets/images/scanning-solution-form/what-icon1.png" alt="Quote" class="action-icon" onerror="this.src=''; this.className='fa-solid fa-file-invoice-dollar action-icon';">
                                <h4>Request Commercial<br>Proposal</h4>
                                <p>Get a detailed<br>quotation</p>
                            </div>
                        </label>
                        <label class="action-card">
                            <input type="radio" name="intent" value="demo_quote" style="display: none;" required>
                            <div class="action-card-content">
                                <img src="assets/images/scanning-solution-form/what-icon2.png" alt="Demo and Quote" class="action-icon" onerror="this.src=''; this.className='fa-solid fa-calendar-check action-icon';">
                                <h4>Both Demo &<br>Commercial Proposal</h4>
                                <p>I'd like both demo<br>and quotation</p>
                            </div>
                        </label>
                    </div>

                    <p class="next-step-hint">You can select more details in the next steps.</p>

                    <button type="button" class="btn-continue-main" onclick="nextStep(2)">
                        Continue <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
                
                <!-- STEP 2 -->
                <div id="step2" class="step-container">
                    <div class="stepper-header">
                        <span class="step-count-text">Step 2 of 6</span>
                        <div class="stepper-dots">
                            <div class="dot completed">1</div><div class="line completed-line"></div>
                            <div class="dot active">2</div><div class="line"></div>
                            <div class="dot">3</div><div class="line"></div>
                            <div class="dot">4</div><div class="line"></div>
                            <div class="dot">5</div><div class="line"></div>
                            <div class="dot">6</div>
                        </div>
                    </div>

                    <h2 class="form-section-title">Tell Us About Your Application</h2>
                    <p class="form-mandatory-text" style="color: var(--text-muted); margin-bottom: 30px;">Help us understand your application better.</p>

                    <!-- Usage Cards -->
                    <div class="form-group full-width" style="margin-bottom: 30px;">
                        <label style="margin-bottom: 15px; font-size: 0.95rem; font-weight: 700; color: #111827;">Post Scan Application Usage <span style="font-weight: 400; color: var(--text-muted);">(Select all that apply)</span></label>
                        <div class="usage-grid">
                            <label class="usage-card">
                                <input type="checkbox" name="usage[]" value="reverse_engineering" style="display: none;">
                                <div class="usage-card-inner">
                                    <div class="usage-title">Reverse<br>Engineering</div>
                                    <img src="assets/images/scanning-solution-form/usage1.png" alt="Reverse Engineering">
                                </div>
                            </label>
                            <label class="usage-card">
                                <input type="checkbox" name="usage[]" value="inspection" style="display: none;">
                                <div class="usage-card-inner">
                                    <div class="usage-title">Inspection &<br>Quality Control</div>
                                    <img src="assets/images/scanning-solution-form/usage2.png" alt="Inspection">
                                </div>
                            </label>
                            <label class="usage-card">
                                <input type="checkbox" name="usage[]" value="automotive" style="display: none;">
                                <div class="usage-card-inner">
                                    <div class="usage-title">Automotive<br>Benchmarking</div>
                                    <img src="assets/images/scanning-solution-form/usage3.png" alt="Automotive">
                                </div>
                            </label>
                            <label class="usage-card">
                                <input type="checkbox" name="usage[]" value="digital_twin" style="display: none;">
                                <div class="usage-card-inner">
                                    <div class="usage-title">Digital Twin<br>/ Factory</div>
                                    <img src="assets/images/scanning-solution-form/usage4.png" alt="Digital Twin">
                                </div>
                            </label>
                            <label class="usage-card">
                                <input type="checkbox" name="usage[]" value="3d_printing" style="display: none;">
                                <div class="usage-card-inner">
                                    <div class="usage-title">3D Printing</div>
                                    <img src="assets/images/scanning-solution-form/usage5.png" alt="3D Printing">
                                </div>
                            </label>
                            <label class="usage-card">
                                <input type="checkbox" name="usage[]" value="factory_scanning" style="display: none;">
                                <div class="usage-card-inner">
                                    <div class="usage-title">Factory<br>Scanning</div>
                                    <img src="assets/images/scanning-solution-form/usage6.png" alt="Factory Scanning">
                                </div>
                            </label>
                            <label class="usage-card">
                                <input type="checkbox" name="usage[]" value="bim" style="display: none;">
                                <div class="usage-card-inner">
                                    <div class="usage-title">BIM / Plant<br>Scanning</div>
                                    <img src="assets/images/scanning-solution-form/usage7.png" alt="BIM">
                                </div>
                            </label>
                            <label class="usage-card">
                                <input type="checkbox" name="usage[]" value="education" style="display: none;">
                                <div class="usage-card-inner">
                                    <div class="usage-title">Education /<br>Research</div>
                                    <img src="assets/images/scanning-solution-form/usage8.png" alt="Education">
                                </div>
                            </label>
                            <label class="usage-card">
                                <input type="checkbox" name="usage[]" value="medical" style="display: none;">
                                <div class="usage-card-inner">
                                    <div class="usage-title">Medical<br>Applications</div>
                                    <img src="assets/images/scanning-solution-form/usage9.png" alt="Medical">
                                </div>
                            </label>
                            <label class="usage-card others-card">
                                <input type="checkbox" name="usage[]" value="others" style="display: none;" onchange="document.getElementById('other_usage_container').style.display = this.checked ? 'block' : 'none';">
                                <div class="usage-card-inner">
                                    <div class="usage-title" style="margin-top: auto; margin-bottom: auto;">Others</div>
                                </div>
                            </label>
                        </div>
                        <div id="other_usage_container" style="display: none; margin-top: 15px;">
                            <input type="text" name="other_usage" placeholder="Other" style="width: 100%; padding: 12px 16px; border: 1px solid var(--border-color); border-radius: 8px; font-size: 0.95rem;">
                        </div>
                    </div>

                    <!-- Size Parts -->
                    <div class="form-group full-width" style="margin-bottom: 30px;">
                        <label style="margin-bottom: 15px; font-size: 0.95rem; font-weight: 700; color: #111827;">What size parts do you work with?</label>
                        <div class="pill-grid size-grid">
                            <label class="pill-card">
                                <input type="radio" name="part_size" value="xs" style="display: none;">
                                <div class="pill-card-inner">
                                    <div class="pill-title">&lt; 100 mm</div>
                                    <div class="pill-subtitle">(Very Small)</div>
                                </div>
                            </label>
                            <label class="pill-card">
                                <input type="radio" name="part_size" value="s" style="display: none;">
                                <div class="pill-card-inner">
                                    <div class="pill-title">100 mm - 1 m</div>
                                    <div class="pill-subtitle">(Small)</div>
                                </div>
                            </label>
                            <label class="pill-card">
                                <input type="radio" name="part_size" value="m" style="display: none;">
                                <div class="pill-card-inner">
                                    <div class="pill-title">1 m - 5 m</div>
                                    <div class="pill-subtitle">(Medium)</div>
                                </div>
                            </label>
                            <label class="pill-card">
                                <input type="radio" name="part_size" value="l" style="display: none;">
                                <div class="pill-card-inner">
                                    <div class="pill-title">5 m - 20 m</div>
                                    <div class="pill-subtitle">(Large)</div>
                                </div>
                            </label>
                            <label class="pill-card">
                                <input type="radio" name="part_size" value="xl" style="display: none;">
                                <div class="pill-card-inner">
                                    <div class="pill-title">20 m+</div>
                                    <div class="pill-subtitle">(Extra Large)</div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Accuracy -->
                    <div class="form-group full-width" style="margin-bottom: 30px;">
                        <label style="margin-bottom: 15px; font-size: 0.95rem; font-weight: 700; color: #111827;">Required Accuracy</label>
                        <div class="pill-grid accuracy-grid">
                            <label class="pill-card">
                                <input type="radio" name="accuracy" value="standard" style="display: none;">
                                <div class="pill-card-inner">
                                    <div class="pill-title">Standard</div>
                                </div>
                            </label>
                            <label class="pill-card">
                                <input type="radio" name="accuracy" value="high" style="display: none;">
                                <div class="pill-card-inner">
                                    <div class="pill-title">High<br>Precision</div>
                                </div>
                            </label>
                            <label class="pill-card">
                                <input type="radio" name="accuracy" value="metrology" style="display: none;">
                                <div class="pill-card-inner">
                                    <div class="pill-title">Metrology<br>Grade</div>
                                </div>
                            </label>
                            <label class="pill-card">
                                <input type="radio" name="accuracy" value="not_sure" style="display: none;">
                                <div class="pill-card-inner">
                                    <div class="pill-title">Not Sure</div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Current Process -->
                    <div class="form-group full-width" style="margin-bottom: 30px;">
                        <label style="margin-bottom: 15px; font-size: 0.95rem; font-weight: 700; color: #111827;">Current Process</label>
                        <div class="pill-grid process-grid">
                            <label class="pill-card">
                                <input type="radio" name="process" value="manual" style="display: none;">
                                <div class="pill-card-inner">
                                    <div class="pill-title">Manual<br>Measurement</div>
                                </div>
                            </label>
                            <label class="pill-card">
                                <input type="radio" name="process" value="cmm" style="display: none;">
                                <div class="pill-card-inner">
                                    <div class="pill-title">CMM</div>
                                </div>
                            </label>
                            <label class="pill-card">
                                <input type="radio" name="process" value="existing_scanner" style="display: none;">
                                <div class="pill-card-inner">
                                    <div class="pill-title">Existing<br>Scanner</div>
                                </div>
                            </label>
                            <label class="pill-card">
                                <input type="radio" name="process" value="outsourced" style="display: none;">
                                <div class="pill-card-inner">
                                    <div class="pill-title">Outsourced<br>Service</div>
                                </div>
                            </label>
                            <label class="pill-card">
                                <input type="radio" name="process" value="none" style="display: none;">
                                <div class="pill-card-inner">
                                    <div class="pill-title">No Existing<br>Process</div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Upload Files -->
                    <div class="form-group full-width" style="margin-bottom: 30px;">
                        <label style="margin-bottom: 15px; font-size: 0.95rem; font-weight: 700; color: #111827;">Upload Files <span style="font-weight: 400; color: var(--text-muted);">(Images, CAD, PDF, Drawings, Inspection Reports)</span></label>
                        <div class="upload-zone-v2" onclick="document.getElementById('fileUpload').click();">
                            <div class="upload-text-v2">Drag & drop files here or click to browse</div>
                            <div class="upload-formats-v2">JPG, PNG, PDF, STEP, IGES, STP, DWG</div>
                            <div class="upload-limit-v2">Max file size 100MB per file</div>
                            <input type="file" name="uploadscan[]" multiple style="display: none;" id="fileUpload">
                        </div>
                        <div id="fileList" style="margin-top: 15px; font-size: 0.85rem; color: var(--text-dark); display: flex; flex-direction: column; gap: 8px;"></div>
                    </div>

                    <p class="next-step-hint">You can select more details in the next steps.</p>

                    <div class="button-row">
                        <button type="button" class="btn-back" onclick="prevStep(1)">
                            <i class="fa-solid fa-arrow-left"></i> Back
                        </button>
                        <button type="button" class="btn-continue-main" onclick="nextStep(3)" style="flex: 2;">
                            Continue <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>


                <!-- STEP 3 -->
                <div id="step3" class="step-container">
                    <div class="stepper-header">
                        <span class="step-count-text">Step 3 of 6</span>
                        <div class="stepper-dots">
                            <div class="dot completed">1</div><div class="line completed-line"></div>
                            <div class="dot completed">2</div><div class="line completed-line"></div>
                            <div class="dot active">3</div><div class="line"></div>
                            <div class="dot">4</div><div class="line"></div>
                            <div class="dot">5</div><div class="line"></div>
                            <div class="dot">6</div>
                        </div>
                    </div>

                    <h2 class="form-section-title">Product Interest</h2>
                    <p class="form-mandatory-text" style="color: var(--text-muted); margin-bottom: 30px;">Which products are you interested in?</p>

                    <!-- Entry Level Solutions -->
                    <div class="form-group full-width">
                        <label style="font-size: 1.05rem; font-weight: 700; color: #111827; margin-bottom: 15px;">Entry Level Solutions</label>
                        <div class="product-grid">
                            <label class="product-card">
                                <input type="checkbox" name="product_interest[]" value="einstar_2" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">Einstar 2</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/product1.png" alt="Einstar 2">
                                </div>
                            </label>
                            <label class="product-card">
                                <input type="checkbox" name="product_interest[]" value="einstar_rockit" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">Einstar Rockit</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/product2.png" alt="Einstar Rockit">
                                </div>
                            </label>
                            <label class="product-card">
                                <input type="checkbox" name="product_interest[]" value="einstar_vega" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">Einstar Vega</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/product3.png" alt="Einstar Vega">
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Professional Solutions -->
                    <div class="form-group full-width">
                        <label style="font-size: 1.05rem; font-weight: 700; color: #111827; margin-bottom: 15px;">Professional Solutions</label>
                        <div class="product-grid">
                            <label class="product-card">
                                <input type="checkbox" name="product_interest[]" value="einscan_libre" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">EinScan Libre</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/product4.png" alt="EinScan Libre">
                                </div>
                            </label>
                            <label class="product-card">
                                <input type="checkbox" name="product_interest[]" value="einscan_rigil" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">EinScan Rigil Series</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/product5.png" alt="EinScan Rigil Series">
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Metrology Solutions -->
                    <div class="form-group full-width">
                        <label style="font-size: 1.05rem; font-weight: 700; color: #111827; margin-bottom: 15px;">Metrology Solutions</label>
                        <div class="product-grid">
                            <label class="product-card">
                                <input type="checkbox" name="product_interest[]" value="freescan_combo" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">FreeScan Combo</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/product6.png" alt="FreeScan Combo">
                                </div>
                            </label>
                            <label class="product-card">
                                <input type="checkbox" name="product_interest[]" value="freescan_ue_pro_2" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">FreeScan UE Pro 2</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/product7.png" alt="FreeScan UE Pro 2">
                                </div>
                            </label>
                            <label class="product-card">
                                <input type="checkbox" name="product_interest[]" value="freescan_omni" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">FreeScan Omni</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/product8.png" alt="FreeScan Omni">
                                </div>
                            </label>
                            <label class="product-card">
                                <input type="checkbox" name="product_interest[]" value="freescan_trak_nova" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">FreeScan Trak Nova</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/product9.png" alt="FreeScan Trak Nova">
                                </div>
                            </label>
                            <label class="product-card">
                                <input type="checkbox" name="product_interest[]" value="optimscan_q12" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">OptimScan Q12</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/product10.png" alt="OptimScan Q12">
                                </div>
                            </label>
                            <label class="product-card">
                                <input type="checkbox" name="product_interest[]" value="auto_inspect_2" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">Auto Inspect 2</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/product11.png" alt="Auto Inspect 2">
                                </div>
                            </label>
                        </div>
                        
                        <div class="product-grid-bottom">
                            <label class="product-card consultation-card">
                                <input type="checkbox" name="product_interest[]" value="not_sure" class="product-checkbox" onchange="document.querySelectorAll('.product-checkbox').forEach(cb => { if(cb !== this) cb.checked = false; });">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">I am not sure, Need Consultation</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/product12.png" alt="Need Consultation">
                                </div>
                            </label>
                            <label class="product-card others-card">
                                <input type="checkbox" name="product_interest[]" value="others" class="product-checkbox">
                                <div class="product-card-inner" style="justify-content: center;">
                                    <span class="product-title" style="margin: 0; font-size: 1rem;">Others</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Software Alert -->
                    <div class="software-alert-box">
                        <h3 style="font-size: 1.05rem; font-weight: 700; color: #111827; margin: 0 0 10px 0;">Do You Need 3D Software Along with the Scanner?</h3>
                        <p style="font-size: 0.9rem; color: #111827; line-height: 1.5; margin: 0 0 15px 0;">Most 3D scanners generate 3D mesh data in formats such as STL, OBJ, or PLY. These files are ideal for visualisation but are not directly editable CAD models. If your application involves Reverse Engineering, CAD Modeling, Inspection, GD&T Analysis, or Quality Control, you may require specialised 3D software along with the scanner.</p>
                        <p style="font-size: 0.9rem; color: #111827; line-height: 1.5; font-weight: 600; margin: 0;">Please select below if you would like to bundle software with your 3D scanner:</p>
                    </div>

                    <!-- Software Solutions -->
                    <div class="form-group full-width" style="margin-bottom: 30px;">
                        <label style="font-size: 1.05rem; font-weight: 700; color: #111827; margin-bottom: 15px;">Software Solutions</label>
                        <div class="product-grid">
                            <label class="product-card">
                                <input type="checkbox" name="software_interest[]" value="geomagic_design_x" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">Geomagic Design X</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/soft1.png" alt="Geomagic Design X">
                                </div>
                            </label>
                            <label class="product-card">
                                <input type="checkbox" name="software_interest[]" value="geomagic_control_x" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">Geomagic Control X</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/soft2.png" alt="Geomagic Control X">
                                </div>
                            </label>
                            <label class="product-card">
                                <input type="checkbox" name="software_interest[]" value="shining3d_inspect" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">SHINING3D Inspect</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/soft3.png" alt="SHINING3D Inspect">
                                </div>
                            </label>
                            <label class="product-card">
                                <input type="checkbox" name="software_interest[]" value="exactflat" class="product-checkbox">
                                <div class="product-card-inner">
                                    <div class="product-card-header">
                                        <div class="fake-checkbox"></div>
                                        <span class="product-title">ExactFlat</span>
                                    </div>
                                    <img src="assets/images/scanning-solution-form/soft4.png" alt="ExactFlat">
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="button-row">
                        <button type="button" class="btn-back" onclick="prevStep(2)">
                            <i class="fa-solid fa-arrow-left"></i> Back
                        </button>
                        <button type="button" class="btn-continue-main" onclick="nextStep(4)" style="flex: 2;">
                            Continue <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- STEP 4 -->
                <div id="step4" class="step-container">
                    <div class="stepper-header">
                        <span class="step-count-text">Step 4 of 6</span>
                        <div class="stepper-dots">
                            <div class="dot completed">1</div><div class="line completed-line"></div>
                            <div class="dot completed">2</div><div class="line completed-line"></div>
                            <div class="dot completed">3</div><div class="line completed-line"></div>
                            <div class="dot active">4</div><div class="line"></div>
                            <div class="dot">5</div><div class="line"></div>
                            <div class="dot">6</div>
                        </div>
                    </div>

                    <h2 class="form-section-title">Commercial Qualification</h2>
                    <p class="form-mandatory-text" style="color: var(--text-muted); margin-bottom: 30px;">This helps us prepare the best proposal for you.</p>

                    <div class="commercial-grid">
                        <!-- Budget Range -->
                        <div class="commercial-column">
                            <label class="commercial-column-title">Budget Range</label>
                            <label class="radio-card">
                                <input type="radio" name="budget_range" value="under_2l">
                                <span class="radio-card-content">Under ₹2 Lakhs</span>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="budget_range" value="2_to_10l">
                                <span class="radio-card-content">₹2 - 10 Lakhs</span>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="budget_range" value="10_to_25l">
                                <span class="radio-card-content">₹10 - 25 Lakhs</span>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="budget_range" value="25_to_50l">
                                <span class="radio-card-content">₹25 - 50 Lakhs</span>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="budget_range" value="above_50l">
                                <span class="radio-card-content">Above ₹50 Lakhs</span>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="budget_range" value="undefined">
                                <span class="radio-card-content">Not Yet Defined</span>
                            </label>
                        </div>

                        <!-- Purchase Timeline -->
                        <div class="commercial-column">
                            <label class="commercial-column-title">Purchase Timeline</label>
                            <label class="radio-card">
                                <input type="radio" name="purchase_timeline" value="immediate">
                                <span class="radio-card-content">Immediate</span>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="purchase_timeline" value="within_30_days">
                                <span class="radio-card-content">Within 30 Days</span>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="purchase_timeline" value="within_90_days">
                                <span class="radio-card-content">Within 90 Days</span>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="purchase_timeline" value="within_6_months">
                                <span class="radio-card-content">Within 6 Months</span>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="purchase_timeline" value="exploring_future">
                                <span class="radio-card-content">Exploring / Future</span>
                            </label>
                        </div>

                        <!-- Procurement / Decision Stage -->
                        <div class="commercial-column">
                            <label class="commercial-column-title">Procurement / Decision Stage</label>
                            <label class="radio-card">
                                <input type="radio" name="decision_stage" value="research">
                                <span class="radio-card-content">Research</span>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="decision_stage" value="technical_evaluation">
                                <span class="radio-card-content">Technical Evaluation</span>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="decision_stage" value="vendor_comparison">
                                <span class="radio-card-content">Vendor Comparison</span>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="decision_stage" value="budget_approval">
                                <span class="radio-card-content">Budget Approval</span>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="decision_stage" value="ready_to_purchase">
                                <span class="radio-card-content">Ready to Purchase</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Notes -->
                    <div class="form-group full-width" style="margin-top: 20px;">
                        <div class="additional-notes-box">
                            <div class="notes-header">
                                <span class="notes-title">Additional Notes</span>
                                <span class="notes-subtitle">Tell us anything else we should know about your requirement</span>
                            </div>
                            <textarea name="additional_notes" rows="4" style="border: none; width: 100%; outline: none; resize: vertical; background: transparent; padding-top: 15px; font-family: 'Inter', sans-serif; font-size: 0.95rem; color: var(--text-dark);" placeholder="Type your notes here..."></textarea>
                        </div>
                    </div>

                    <div class="button-row" style="margin-top: 30px;">
                        <button type="button" class="btn-back" onclick="prevStep(3)">
                            <i class="fa-solid fa-arrow-left"></i> Back
                        </button>
                        <button type="button" class="btn-continue-main" onclick="nextStep(5)" style="flex: 2;">
                            Continue <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>


                <!-- STEP 5 -->
                <div id="step5" class="step-container">
                    <div class="stepper-header">
                        <span class="step-count-text">Step 5 of 5</span>
                        <div class="stepper-dots">
                            <div class="dot completed">1</div><div class="line completed-line"></div>
                            <div class="dot completed">2</div><div class="line completed-line"></div>
                            <div class="dot completed">3</div><div class="line completed-line"></div>
                            <div class="dot completed">4</div><div class="line completed-line"></div>
                            <div class="dot active">5</div>
                        </div>
                    </div>

                    <h2 class="form-section-title">Review & Submit</h2>
                    <p class="form-mandatory-text" style="color: var(--text-muted); margin-bottom: 30px;">Please review your information before submitting.</p>

                    <div class="review-cards-container">
                        <div class="review-card">
                            <img src="assets/images/scanning-solution-form/review-icon1.png" alt="Contact">
                            <div class="review-card-text">
                                <span class="review-card-title">Contact Information</span>
                                <span class="review-card-value" id="rev-contact">-</span>
                            </div>
                        </div>
                        <div class="review-card">
                            <img src="assets/images/scanning-solution-form/review-icon2.png" alt="Application">
                            <div class="review-card-text">
                                <span class="review-card-title">Application Details</span>
                                <span class="review-card-value" id="rev-application">-</span>
                            </div>
                        </div>
                        <div class="review-card">
                            <img src="assets/images/scanning-solution-form/review-icon3.png" alt="Products">
                            <div class="review-card-text">
                                <span class="review-card-title">Products of Interest</span>
                                <span class="review-card-value" id="rev-products">-</span>
                            </div>
                        </div>
                        <div class="review-card">
                            <img src="assets/images/scanning-solution-form/review-icon4.png" alt="Commercial">
                            <div class="review-card-text">
                                <span class="review-card-title">Commercial Details</span>
                                <span class="review-card-value" id="rev-commercial">-</span>
                            </div>
                        </div>
                        <div class="review-card">
                            <img src="assets/images/scanning-solution-form/review-icon5.png" alt="Demo">
                            <div class="review-card-text">
                                <span class="review-card-title">Demo Details</span>
                                <span class="review-card-value" id="rev-demo">-</span>
                            </div>
                        </div>
                        <div class="review-card">
                            <img src="assets/images/scanning-solution-form/review-icon6.png" alt="Files">
                            <div class="review-card-text">
                                <span class="review-card-title">Uploaded Files <span id="rev-files-count"></span></span>
                                <span class="review-card-value" id="rev-files">-</span>
                            </div>
                        </div>
                    </div>

                    <div class="next-steps-box">
                        <h4 class="next-steps-title">What Happens Next?</h4>
                        <div class="next-steps-grid">
                            <div class="next-step-item">
                                <img src="assets/images/scanning-solution-form/review-icon7.png" alt="Review">
                                <span>Requirement<br>Review</span>
                            </div>
                            <div class="next-step-item">
                                <img src="assets/images/scanning-solution-form/review-icon8.png" alt="Solution">
                                <span>Solution<br>Recommendation</span>
                            </div>
                            <div class="next-step-item">
                                <img src="assets/images/scanning-solution-form/review-icon9.png" alt="Discussion">
                                <span>Demo / Technical<br>Discussion</span>
                            </div>
                            <div class="next-step-item">
                                <img src="assets/images/scanning-solution-form/review-icon10.png" alt="Proposal">
                                <span>Commercial<br>Proposal</span>
                            </div>
                            <div class="next-step-item">
                                <img src="assets/images/scanning-solution-form/review-icon11.png" alt="ROI">
                                <span>ROI & Next<br>Steps</span>
                            </div>
                        </div>
                    </div>

                    <div class="confirm-checkbox-row">
                        <label class="confirm-label">
                            <input type="checkbox" id="confirmData" required>
                            <span>I confirm that the above information is correct.</span>
                        </label>
                    </div>

                    <div class="button-row" style="margin-top: 30px;">
                        <button type="button" class="btn-back" onclick="prevStep(4)">
                            <i class="fa-solid fa-arrow-left"></i> Back
                        </button>
                        <button type="submit" class="btn-continue-main" style="flex: 2; background-color: var(--primary-orange);">
                            Submit & Get My Recommendation <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    
    <script>
        // Handle selectable cards styling
        document.querySelectorAll('.action-card input[type="radio"], .radio-card input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const name = this.name;
                document.querySelectorAll(`input[name="${name}"]`).forEach(r => {
                    const card = r.closest('.action-card') || r.closest('.radio-card');
                    if (card) card.classList.remove('selected');
                });
                if(this.checked) {
                    const card = this.closest('.action-card') || this.closest('.radio-card');
                    if (card) card.classList.add('selected');
                }
            });
        });

        // Navigation logic
        function getTextWithoutBr(el) {
            if(!el) return '';
            return el.innerHTML.replace(/<br\s*[\/]?>/gi, ' ').replace(/(<([^>]+)>)/gi, "").replace(/\s+/g, ' ').trim();
        }

        function populateReview() {
            // Contact
            let name = document.getElementById('full_name')?.value || '';
            let company = document.getElementById('company_name')?.value || '';
            let phone = document.getElementById('mobile_number')?.value || '';
            let code = document.getElementById('phoneCodeSelect')?.value || '';
            
            let contactString = '';
            if(name || company) contactString += `${name}${name && company ? ', ' : ''}${company}`;
            if(phone) contactString += `${contactString ? ' | ' : ''}${code} ${phone}`;
            document.getElementById('rev-contact').textContent = contactString || 'N/A';

            // Application Details
            let usages = Array.from(document.querySelectorAll('input[name="usage[]"]:checked'))
                .map(el => getTextWithoutBr(el.closest('.usage-card').querySelector('.usage-title')))
                .join(', ');
            if(!usages) usages = 'N/A';
            
            let sizeEl = document.querySelector('input[name="part_size"]:checked');
            let size = sizeEl ? getTextWithoutBr(sizeEl.closest('.pill-card').querySelector('.pill-title')) : 'N/A';
            
            let accEl = document.querySelector('input[name="accuracy"]:checked');
            let acc = accEl ? getTextWithoutBr(accEl.closest('.pill-card').querySelector('.pill-title')) : 'N/A';

            document.getElementById('rev-application').textContent = `Application: ${usages} | Part Size: ${size} | ${acc}`;

            // Products
            let prods = Array.from(document.querySelectorAll('input[name="product_interest[]"]:checked'))
                .map(el => getTextWithoutBr(el.closest('.product-card').querySelector('.product-title')))
                .join(', ');
            let softs = Array.from(document.querySelectorAll('input[name="software_interest[]"]:checked'))
                .map(el => getTextWithoutBr(el.closest('.product-card').querySelector('.product-title')))
                .join(', ');
            let prodText = [prods, softs].filter(Boolean).join(' | ') || 'None Selected';
            document.getElementById('rev-products').textContent = prodText;

            // Commercial
            let budgetEl = document.querySelector('input[name="budget_range"]:checked');
            let budget = budgetEl ? getTextWithoutBr(budgetEl.closest('.radio-card').querySelector('.radio-card-content')) : 'N/A';
            
            let timelineEl = document.querySelector('input[name="purchase_timeline"]:checked');
            let timeline = timelineEl ? getTextWithoutBr(timelineEl.closest('.radio-card').querySelector('.radio-card-content')) : 'N/A';
            
            document.getElementById('rev-commercial').textContent = `Budget: ${budget} | Timeline: ${timeline}`;

            // Demo Details
            document.getElementById('rev-demo').textContent = 'Not Scheduled';

            // Uploaded Files
            let fileInput = document.getElementById('fileUpload');
            let filesCountElem = document.getElementById('rev-files-count');
            if (fileInput && fileInput.files.length > 0) {
                filesCountElem.textContent = `(${fileInput.files.length})`;
                let filesText = Array.from(fileInput.files).map(f => `${f.name} - ${(f.size/(1024*1024)).toFixed(1)} MB`).join(' | ');
                document.getElementById('rev-files').textContent = filesText;
            } else {
                filesCountElem.textContent = '';
                document.getElementById('rev-files').textContent = 'No files uploaded';
            }
        }

        function nextStep(stepNumber) {
            if (stepNumber === 2) {
                let isValid = true;
                const step1Inputs = document.querySelectorAll('#step1 [required]');
                for (let input of step1Inputs) {
                    if (input.disabled) continue;
                    if (!input.checkValidity()) {
                        input.reportValidity();
                        isValid = false;
                        break;
                    }
                }
                if (!isValid) return;
            }

            if(stepNumber === 5) populateReview();
            
            document.querySelectorAll('.step-container').forEach(step => step.classList.remove('active'));
            const nextStepEl = document.getElementById('step' + stepNumber);
            if (nextStepEl) {
                nextStepEl.classList.add('active');
            } else {
                alert("Step " + stepNumber + " complete!");
            }
        }
        
        function prevStep(stepNumber) {
            document.querySelectorAll('.step-container').forEach(step => step.classList.remove('active'));
            document.getElementById('step' + stepNumber).classList.add('active');
        }

        // Fetch Countries and Phone Codes
        document.addEventListener("DOMContentLoaded", function() {
            fetch("https://countriesnow.space/api/v0.1/countries/codes")
                .then(res => res.json())
                .then(data => {
                    if (!data.error) {
                        const countrySelect = document.getElementById("countrySelect");
                        const phoneCodeSelect = document.getElementById("phoneCodeSelect");
                        
                        const countries = data.data.sort((a, b) => a.name.localeCompare(b.name));
                        
                        countries.forEach(country => {
                            const codeOption = document.createElement("option");
                            codeOption.value = country.dial_code;
                            codeOption.textContent = `${country.code} ${country.dial_code}`;
                            if(country.name === "India") codeOption.selected = true;
                            phoneCodeSelect.appendChild(codeOption);

                            const countryOption = document.createElement("option");
                            countryOption.value = country.name;
                            countryOption.textContent = country.name;
                            countrySelect.appendChild(countryOption);
                        });
                    }
                }).catch(err => console.error("Error fetching countries:", err));
        });

        // Fetch States
        document.getElementById("countrySelect").addEventListener("change", function() {
            const stateSelect = document.getElementById("stateSelect");
            const citySelect = document.getElementById("citySelect");
            
            stateSelect.innerHTML = '<option value="" disabled selected>Loading...</option>';
            stateSelect.disabled = true;
            citySelect.innerHTML = '<option value="" disabled selected>Select city</option>';
            citySelect.disabled = true;

            fetch("https://countriesnow.space/api/v0.1/countries/states", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ country: this.value })
            })
            .then(res => res.json())
            .then(data => {
                stateSelect.innerHTML = '<option value="" disabled selected>Select state</option>';
                if (!data.error && data.data.states.length > 0) {
                    stateSelect.disabled = false;
                    data.data.states.forEach(state => {
                        const option = document.createElement("option");
                        option.value = state.name;
                        option.textContent = state.name;
                        stateSelect.appendChild(option);
                    });
                } else {
                    stateSelect.innerHTML = '<option value="N/A">Not Applicable</option>';
                    stateSelect.disabled = false;
                    citySelect.disabled = false;
                }
            }).catch(err => {
                console.error("Error fetching states:", err);
                stateSelect.innerHTML = '<option value="N/A">Not Applicable</option>';
                stateSelect.disabled = false;
                citySelect.disabled = false;
            });
        });

        // Fetch Cities
        document.getElementById("stateSelect").addEventListener("change", function() {
            const citySelect = document.getElementById("citySelect");
            const countryName = document.getElementById("countrySelect").value;
            
            citySelect.innerHTML = '<option value="" disabled selected>Loading...</option>';
            citySelect.disabled = true;

            fetch("https://countriesnow.space/api/v0.1/countries/state/cities", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ country: countryName, state: this.value })
            })
            .then(res => res.json())
            .then(data => {
                citySelect.innerHTML = '<option value="" disabled selected>Select city</option>';
                if (!data.error && data.data.length > 0) {
                    citySelect.disabled = false;
                    data.data.forEach(city => {
                        const option = document.createElement("option");
                        option.value = city;
                        option.textContent = city;
                        citySelect.appendChild(option);
                    });
                } else {
                    citySelect.innerHTML = '<option value="N/A">Not Applicable</option>';
                    citySelect.disabled = false;
                }
            }).catch(err => {
                console.error("Error fetching cities:", err);
                citySelect.innerHTML = '<option value="N/A">Not Applicable</option>';
                citySelect.disabled = false;
            });
        });

        // Handle file upload display
        document.getElementById('fileUpload').addEventListener('change', function() {
            const fileList = document.getElementById('fileList');
            fileList.innerHTML = '';
            
            if (this.files.length > 0) {
                Array.from(this.files).forEach(file => {
                    const fileSize = (file.size / (1024 * 1024)).toFixed(2);
                    const fileItem = document.createElement('div');
                    fileItem.style.display = 'flex';
                    fileItem.style.alignItems = 'center';
                    fileItem.style.gap = '10px';
                    fileItem.style.background = '#fffaf5';
                    fileItem.style.border = '1px solid #fdba74';
                    fileItem.style.padding = '8px 12px';
                    fileItem.style.borderRadius = '6px';
                    
                    fileItem.innerHTML = `
                        <i class="fa-solid fa-file" style="color: var(--primary-orange);"></i>
                        <span style="flex-grow: 1; font-weight: 500; word-break: break-all;">${file.name}</span>
                        <span style="color: var(--text-muted); font-size: 0.75rem;">${fileSize} MB</span>
                    `;
                    fileList.appendChild(fileItem);
                });
            }
        });
    </script>
</body>
</html>
