<div class="modal fade" id="investmentCalculatorModal" tabindex="-1" aria-labelledby="investmentCalculatorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="modal-title" id="investmentCalculatorModalLabel">
                    Investment Calculator
                </h3>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6406 18.3188C20.0062 18.6844 20.0062 19.275 19.6406 19.6406C19.2741 20.0062 18.6806 20.0062 18.315 19.6406L15 16.3219L11.685 19.6406C11.3194 20.0062 10.7259 20.0062 10.3594 19.6406C9.99375 19.275 9.99375 18.6844 10.3594 18.3188L13.6744 15L10.3594 11.6812C9.99375 11.3156 9.99375 10.725 10.3594 10.3594C10.7259 9.9938 11.3194 9.9938 11.685 10.3594L15 13.6781L18.315 10.3594C18.6806 9.9938 19.2741 9.9938 19.6406 10.3594C20.0062 10.725 20.0062 11.3156 19.6406 11.6812L16.3256 15L19.6406 18.3188ZM26.25 0H3.75C1.67906 0 0 1.67812 0 3.75V26.25C0 28.3219 1.67906 30 3.75 30H26.25C28.3209 30 30 28.3219 30 26.25V3.75C30 1.67812 28.3209 0 26.25 0Z" fill="#1B8036"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="investment-summary">
                    <h6 class="text-start text-uppercase mb-2">Investment Amount</h6>
                    <div class="row">
                        <div class="col-12 col-sm-3 bg-left">
                            <h2 class="title">
                                $<span id="minInvestment">2,000</span> 
                            </h2>
                            <p class="pt-3 fw-semibold text-center">
                                Minimum Investment
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 bg-center">
                            <div class="input-group align-items-center justify-content-center">
                                <button id="decrement" class="btn btn-calculate">-</button>
                                <input type="number" id="investmentAmount" class="form-control text-center" value="2000" step="1000">
                                <button id="increment" class="btn btn-calculate">+</button>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3 bg-right">
                            <h2 class="total-payment">
                                <span id="totalPayment">4,400</span>
                            </h2>
                            <p class="pt-3 fw-semibold text-center">Total Payment</p>
                        </div>
                    </div>
                </div>

                <div class="investment-detail">
                    <h6 class="text-start text-uppercase mb-2">Investment Amount</h6>
                    <div class="details-card row">
                        <div class="col-6 left">
                            <span class="title">Duration Investment</span>
                        </div>
                        <div class="col-6 right">
                            <span class="title">8 Year</span>
                        </div>
                    </div>
                    <div class="details-card row">
                        <div class="col-6 left">
                            <span class="title">Instalment <strong> Per 6 Month</strong></span>
                        </div>
                        <div class="col-6 right">
                            <span id="installment" class="title">$150.00</span>
                        </div>
                    </div>
                    <div class="details-card row">
                        <div class="col-6 left">
                            <span class="title">Yearly Profits</span>
                        </div>
                        <div class="col-6 right">
                            <span id="yearlyProfits" class="title">$300.00</span>
                        </div>
                    </div>
                    <div class="details-card row">
                        <div class="col-6 left">
                            <span class="title">Monthly Profits</span>
                        </div>
                        <div class="col-6 right">
                            <span id="monthlyProfits" class="title">$25.00</span>
                        </div>
                    </div>
                    <div class="details-card row">
                        <div class="col-6 left">
                            <span class="title">Nett Profit</span>
                        </div>
                        <div class="col-6 right">
                            <span class="title" id="nettProfit">$2,400.00</span>
                        </div>
                    </div>
                    <div class="details-card row">
                        <div class="col-6 left">
                            <span class="title">Capital Returned</span>
                        </div>
                        <div class="col-6 right">
                            <span id="capitalReturned" class="title">$2,000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const minInvestment = 2000;
    const incrementStep = 1000;
    const apr = <?= (($map == 'funds') ? 0.15 : (($map == 'bitcoin') ? 0.12 : 0.10)) ?>;
    const duration = 8; // in years
    const investmentInput = document.getElementById('investmentAmount');
    const totalPayment = document.getElementById('totalPayment');
    const installment = document.getElementById('installment');
    const yearlyProfits = document.getElementById('yearlyProfits');
    const monthlyProfits = document.getElementById('monthlyProfits');
    const nettProfit = document.getElementById('nettProfit');
    const capitalReturned = document.getElementById('capitalReturned');

    let lastValidAmount = minInvestment;

    document.getElementById('increment').addEventListener('click', () => {
      let currentAmount = parseInt(investmentInput.value);
      currentAmount += incrementStep;
      updateValues(currentAmount);
    });

    document.getElementById('decrement').addEventListener('click', () => {
      let currentAmount = parseInt(investmentInput.value);
      if (currentAmount > minInvestment) {
        currentAmount -= incrementStep;
        updateValues(currentAmount);
      }
    });

    investmentInput.addEventListener('input', () => {
      let inputAmount = parseInt(investmentInput.value);
      if (inputAmount >= minInvestment && inputAmount % 1000 === 0) {
        lastValidAmount = inputAmount;
        updateValues(inputAmount);
      } else {
        investmentInput.style.border = '2px solid red'; // Highlight error
      }
    });

    investmentInput.addEventListener('blur', () => {
      let inputAmount = parseInt(investmentInput.value);
      if (inputAmount < minInvestment || inputAmount % 1000 !== 0) {
        investmentInput.value = lastValidAmount;
        investmentInput.style.border = '';
        updateValues(lastValidAmount);
      }
    });

    function updateValues(amount) {
      investmentInput.value = amount;
      investmentInput.style.border = ''; // Remove error highlight

      const total = (amount + amount * apr * duration).toLocaleString();
      const yearly = (amount * apr).toLocaleString();
      const monthly = (amount * apr / 12).toLocaleString();
      const nett = (amount * apr * duration).toLocaleString();
      const capital = amount.toLocaleString();

      totalPayment.innerText = `$${total}`;
      installment.innerText = `$${(amount * apr / 2).toLocaleString()}`;
      yearlyProfits.innerText = `$${yearly}`;
      monthlyProfits.innerText = `$${monthly}`;
      nettProfit.innerText = `$${nett}`;
      capitalReturned.innerText = `$${capital}`;
    }

    updateValues(minInvestment);
</script>