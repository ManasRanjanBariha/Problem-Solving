// 1441

class Solution {
    public List<String> buildArray(int[] target, int n) {
        List<String> ans=new ArrayList<>();
        int last=target[target.length-1];
        int ind=0;
        for(int i=1;i<=n;i++)
        {
            ans.add("Push");
            ind++;
            if(i==last)
            {
                break;
            }
            if(i!=target[ind-1])
            {
                ans.add("Pop");
                ind--;
            }
            
        }
        return ans;
    }
}