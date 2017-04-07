import java.util.Scanner;

/**
 * Created by George-Lenovo on 4/5/2017.
 */
public class ChangeToUppercase {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        String text = in.nextLine();
        int start = 0;
        int end = 0;
        StringBuilder sb = new StringBuilder();

        while (true) {
            start = text.indexOf("<upcase>");
            end = text.indexOf("</upcase>");

            if (start == -1 && end == -1) {
                break;
            }
            String subText = text.substring(start + 8, end).toUpperCase();

            for (int i = 0; i < start; i ++) {
                sb.append(text.charAt(i));
            }
            sb.append(subText);
            for (int i = end + 9; i < text.length(); i ++) {
                sb.append(text.charAt(i));
            }

            text = sb.toString();
            sb.setLength(0);
        }

        System.out.println(text);
    }
}
