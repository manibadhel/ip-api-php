# IP Info Fetcher using PHP and ip-api.com

## Description

This PHP script provides an easy way to fetch and display IP address details using the [ip-api.com](http://ip-api.com) service. When a user visits the page, the script retrieves information about their IP address and displays it in a table format. Additionally, it logs the user's IP address and the current timestamp into a JSON file (`data.json`) for record-keeping.

### Key Features:
- Fetches and displays IP address details like country, region, city, latitude, longitude, ISP, and more.
- Records the user's IP address and the time of access in a `data.json` file.
- Utilizes Bootstrap for a responsive and user-friendly interface.

## How It Works

1. **IP Address Retrieval**: The script first retrieves the user's IP address using `$_SERVER['REMOTE_ADDR']`.
2. **API Request**: It then makes a call to the ip-api.com API to get detailed information about the IP address. Note that the API is limited to 45 requests per minute per IP address.
3. **Display Information**: If the API call is successful, it displays the information in a Bootstrap-styled table. If the request fails, an error message is shown.
4. **Logging Data**: The script also logs the user's IP address and the current timestamp to a JSON file named `data.json`. This can be useful for tracking or analytics purposes.

## Steps to Use

1. **Clone the Repository**: First, clone this repository to your local machine or server using the following command:
   ```bash
   git clone https://github.com/manibahel/ip-api-php.git
   ```

2. **Set Up Your Environment**:
   - Ensure you have a web server with PHP support (e.g., Apache or Nginx).
   - Make sure PHP is installed on your server.

3. **Upload the Script**: Upload the `index.php` file to your web server’s document root or desired directory.

4. **Create a Data File**: Ensure that the web server has write permissions to the directory where `data.json` will be created. You might need to create an empty `data.json` file in the same directory as `index.php` or adjust permissions accordingly.

5. **Access the Script**: Open your web browser and navigate to the URL where you uploaded the script (e.g., `http://yourdomain.com/index.php`). You should see the IP address information displayed in a table.

6. **Check Data Logs**: The `data.json` file will be created in the same directory as `index.php` and will contain the logged IP addresses and timestamps.

## Example

Here's a sample output for an IP address query:

| Key          | Value               |
|---------------|---------------------|
| query         | 192.168.1.1         |
| country       | United States       |
| regionName    | California          |
| city          | Los Angeles         |
| zip           | 90001               |
| lat           | 34.0522             |
| lon           | -118.2437           |
| timezone      | America/Los_Angeles |
| isp           | Example ISP         |

## Notes

- **API Limitations**: The ip-api.com service has 45 requests per minute limits, so avoid excessive requests from the same IP address.
- **Security**: Ensure your server is properly secured, as the script logs user data which may have privacy implications.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- [Bootstrap](https://getbootstrap.com) for the UI framework.
- [ip-api.com](http://ip-api.com) for providing the IP information service.
- If need any kind of help, contact me at [hi@maninder.net](mailto:hi@maninder.net)

Feel free to contribute or open issues if you encounter any problems or have suggestions for improvements!

---

This README file should help users understand and utilize the PHP script effectively. Let me know if you need any more details!
