import { Sepolia } from "@thirdweb-dev/chains";
import { ThirdwebSDK } from "@thirdweb-dev/sdk";
const sdk = new ThirdwebSDK(Sepolia, {
  secretKey: "-_E2sUDaQNYlXMbp27rIM_2M2OBz9yrivTNLKiClcc5E-qpN8rz2zvWEq4KaVArlieRVYMjM0-DQrKEEGl7kMA",
});
const contractAddress = "0x591672C56A6a7da16d2F9495Df2dFB9675f61517";
const contract = await sdk.getContract(contractAddress);

// Handle form submission for idea submission
async function submit_Idea(formData) {
  try {
    // Extract data from the form or formData as needed
    const _ideaData = /* Extract idea data from formData or form fields */;
    
    // Call the submitIdea function
    const data = await contract.call("submitIdea", [_ideaData]);

    // Handle the result if needed
    console.log("Idea submitted:", data);
  } catch (error) {
    console.error("Error submitting idea:", error);
  }
}